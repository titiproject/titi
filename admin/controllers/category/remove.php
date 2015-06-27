<?php
// load Model
require_once('models/category.php');

// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
$urlDefault = "index.php?controller=category&action=list";

// Lay id cua list
if (isset($_POST['catid'])) {
    $catid = $_POST['catid'];
    echo $catid;
    $kq = $catDB->removeCategory($catid);
    header('Location:'.$urlDefault);
    //if (!$kq) { $error = "Co loi trong qua trinh cap nhat"; } else { $success = "Cap nhat du lieu thanh cong";}
}


