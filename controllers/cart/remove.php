<?php
require('helper/cart.php');

if (!isset($_SESSION['cart'])) { // neu ko ton tai gio hang
	$_SESSION['cart'] = array();
	$_SESSION['item'] = 0;
	$_SESSION['total_price'] = '0.00';
}
if (isset($_POST['proid'])) {
    $proid = $_POST['proid'];
    if (isset($_SESSION['cart'][$proid])){ unset($_SESSION['cart'][$proid]);}
    
    $_SESSION['total_price'] = calculate_price($_SESSION['cart'],$proList);
    $_SESSION['item'] = calculate_item($_SESSION['cart']);
    $url = 'index.php?controller=product&action=detail&proid='.$proid;
    //header("Location:$url");
    $a = array("status"=>"success", "error"=>"false", "message"=>"Xoa san pham thanh cong");
} else {$a = array("status"=>"error", "error"=>"true", "message"=>"Xoa san phan that bai");}
echo json_encode($a);