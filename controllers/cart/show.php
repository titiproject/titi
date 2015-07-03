<?php
require('helper/cart.php');
$title = 'Xem giỏ hàng';
//$_SESSION['total_price'] = calculate_price($_SESSION['cart'],$proList);
//$_SESSION['item'] = calculate_item($_SESSION['cart']);
$breadcum = 'Xem giỏ hàng';
require('views/'.$controller.'/'.$action.'.tpl.php');
