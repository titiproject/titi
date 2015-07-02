<?php
// load Model



// truyền dữ liệu qua view
$title = ' Trang chủ';
//$product = get_test_prodct();


// load category


// load view len
$file = 'views/'.$controller.'/'.$action.'.tpl.php';
if (file_exists($file)) { // kiểm tra xem có controller và action ko
	require($file);
} else {
	show_404();
}