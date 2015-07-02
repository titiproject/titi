<?php 

require('helper/cart.php');

if (!isset($_POST['cart'])) { // neu ko ton tai gio hang
	$_SESSION['cart'] = array();
	$_SESSION['item'] = 0;
	$_SESSION['total_price'] = '0.00';
}
if (isset($_GET['proid'])) {
    $proid = $_GET['proid'];
    if (isset($_SESSION['cart'][$proid])){ $_SESSION['cart'][$proid]++;}
    else {$_SESSION['cart'][$proid] = 1;}
    
    $_SESSION['total_price'] = calculate_price($_SESSION['cart'],$proList);
    $_SESSION['item'] = calculate_item($_SESSION['cart']);
    $url = 'index.php?controller=product&action=detail&proid='.$proid;
    header("Location:$url");
}