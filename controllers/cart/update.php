<?php 
require('helper/cart.php');
foreach ($_SESSION['cart'] as $key => $value) {
	if ($_SESSION['cart'][$key] != $_POST[$key]) {
		$_SESSION['cart'][$key] = $_POST[$key];
	}
	if ($_SESSION['cart'][$key] == '0') {unset($_SESSION['cart'][$key]);}
}
$_SESSION['total_price'] = calculate_price($_SESSION['cart'],$proList);
$_SESSION['item'] = calculate_item($_SESSION['cart']);
header('Location:index.php?controller=cart&action=show');