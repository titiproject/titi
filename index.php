<?php
// load config
require_once('config.php');
// load library
require_once('library/error.php');
require_once('library/function.php');
require_once('./library/define.php');
// load model
titiimport('models/database/DB.php');
require_once('models/class/category.php');
require_once('models/class/product.php');
require_once('models/database/category.php');
require_once('models/database/product.php');
require_once('helper/category.php');


// get
$catDB = new CategoryDB();
$catList = $catDB->getCategoies();
//  Xử lý request từ trình duyệt và gọi controller / action tương ứng
if (isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if (isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) { // kiểm tra xem có controller và action ko
	require($file);
} else {
	show_404();
}

mysql_close($db);