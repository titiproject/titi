<?php
// load Model
require_once('models/category.php');

$title = ' Add Category';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;

// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
//$catList =  $catDB->getCategoies();
$error = '';
$success = '';

// Xu ly tu server gui ve
if (isset($_POST['save'])) {
    $catname = $_POST['catname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $parentid = $_POST['parentid'];
    $cat = new Category();
    $cat->setAuthor($user->getId());
    $cat->setCatname($catname);
    $cat->setDescription($description);
    $cat->setParentId($parentid);
    $cat->setStatus($status);
    $kq = $catDB->addCategory($cat);
    
    $idCatInsert = $catDB->getInsertId();
    if (!$kq) { $error = "Co loi trong qua trinh them"; } else { $success = "Them du lieu thanh cong";}
}



require('views/'.$controller.'/'.$action.'.tpl.php');

