<?php
// load Model
require_once('models/category.php');
require_once('models/product.php');
require_once('library/product.helper.php');
require_once('library/category.helper.php');

$title = ' Add Product';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;
try {
// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
$catList =  $catDB->getCategoies();
$proDB = new ProductDB();
$proList = $proDB->getProducts();
$error = '';
$success = '';
$idProduct = null;
} catch(Exception $e) { echo $e->getMessage();}

// Xu ly tu server gui ve
if (isset($_POST['save'])) {
    $proname = $_POST['proname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $catid = $_POST['catid'];
    $price = $_POST['price'];
    $image = $proList->count() + 1;
    $image = "product".$image; 
    try { $image=fileUpload('image',$image);} catch (Exception $e) {echo $e->getMessage();}
    $pro = new Product();
    $pro->setAuthor($user->getId());
    $pro->setProname($proname);
    $pro->setDescription($description);
    $pro->setPrice($price);
    $pro->setCatid($catid);
    $pro->setStatus($status);
    $pro->setImage($image);
    if (!isset($idProduct)) { // khi save hình ảnh trước
        $kq = $proDB->addProduct($pro);
        $idProduct = $proDB->getInsertId();
    } else $kq = $proDB->updateProduct ($pro);
    if (!$kq) { $error = "Không thêm được sản phẩm"; } else { $success = "Thêm sản phẩm  thành công";}
}
// 



require('views/'.$controller.'/'.$action.'.tpl.php');

