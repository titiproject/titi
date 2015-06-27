<?php
// load config
require_once('config.php');
// load library
require_once('library/error.php');

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