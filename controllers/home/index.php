<?php
// load Model
require_once('models/database/product.php');


// truyền dữ liệu qua view
$title = 'titi | Trang chủ';
$product = get_test_prodct();


// load category
$catDB = new CategoryDB();
$catList = $catDB->getCategoies();

// load view len
$file = 'controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) { // kiểm tra xem có controller và action ko
	require($file);
} else {
	show_404();
}