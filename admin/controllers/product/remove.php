<?php
// load Model
require_once('models/product.php');

// Tao moi cac gia tri can dung
$proDB = new ProductDB();
$urlDefault = "index.php?controller=product&action=list";

// Lay id cua list
if (isset($_POST['proid'])) {
    $proid = $_POST['proid'];
    //echo $catid;
    $kq = $proDB->removeProduct($proid);
    header('Location:'.$urlDefault);
    //if (!$kq) { $error = "Co loi trong qua trinh cap nhat"; } else { $success = "Cap nhat du lieu thanh cong";}
}


