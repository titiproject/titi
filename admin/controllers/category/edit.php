<?php
// load Model
require_once('models/category.php');
require_once('library/category.helper.php');

$title = ' Edit Category';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;

// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
$catList =  $catDB->getCategoies();
$error = '';
$success = '';

// Lay id cua list
$cat = null;
if (isset($cat)) echo "cat";
if (isset($_POST['catid'])) {
    $catid = $_POST['catid'];
    $_SESSION['catid_edit'] = $catid;
    $cat = $catList->getCategory($catid);
}
// Xu ly tu server gui ve
if (isset($_POST['save'])) {
    echo $_SESSION['catid_edit'];
    $catid = $_SESSION['catid_edit'];
    $catname = $_POST['catname'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $parentid = $_POST['parentid'];
    $cat = new Category();
    $cat->setCatid($catid);
    //$cat->setAuthor($user->getId());
    $cat->setCatname($catname);
    $cat->setDescription($description);
    $cat->setParentId($parentid);
    $cat->setStatus($status);
    $kq = $catDB->updateCategory($cat);
    unset($_SESSION['catid_edit']);
    //$idCatInsert = $catDB->getInsertId();
    if (!$kq) { $error = "Co loi trong qua trinh cap nhat"; } else { $success = "Cap nhat du lieu thanh cong";}
}



require('views/'.$controller.'/'.$action.'.tpl.php');

