<?php
// load Model
require_once('models/database/product.php');

// truyền dữ liệu qua view
$title = 'titi | Trang chủ';
$product = get_test_prodct();

// load view len
require('views/home/index1.php');