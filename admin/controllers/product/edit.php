<?php
// load Model
require_once('models/category.php');
require_once('models/product.php');
require_once('library/category.helper.php');
require_once('library/product.helper.php');

$title = ' Edit Product';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;

// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
$proDB = new ProductDB();
$catList =  $catDB->getCategoies();
$proList = $proDB->getProducts();
$error = '';
$success = '';

// Lay id cua list
$pro = null;
if (isset($_POST['proid'])) {
    $proid = $_POST['proid'];
    $_SESSION['proid_edit'] = $proid;
    $pro = $proList->findProductId($proid);
}
// Xu ly tu server gui ve
if (isset($_POST['save'])) {
    //echo $_SESSION['proid_edit'];
    $proid = $_SESSION['proid_edit'];    
    $proname = $_POST['proname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $catid = $_POST['catid'];
    $price = $_POST['price'];
    $image = "product".$proid; 
    try { $image=fileUpload('image',$image);} catch (Exception $e) {echo $e->getMessage();}
    unset($_SESSION['proid_edit']);
    $proEdit = new Product();
    $proEdit->setProid($proid);
    //$pro->setAuthor($user->getId());
    $proEdit->setProname($proname);
    $proEdit->setDescription($description);
    $proEdit->setPrice($price);
    $proEdit->setCatid($catid);
    $proEdit->setStatus($status);
    $proEdit->setImage($image);
      //print_r($proEdit);
    $kq = $proDB->updateProduct($proEdit);
    if (!$kq) { $error = "Không cập nhật được sản phẩm"; } else { $success = "Cập nhật sản phẩm  thành công";}
}
if (isset($_POST['cancel'])) {
    unset($_SESSION['pro_edit']);
    header('Location:'.$urlDefault);
}


require('views/'.$controller.'/'.$action.'.tpl.php');

