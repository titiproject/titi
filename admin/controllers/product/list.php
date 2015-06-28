<?php
// load Model
titiimport('models/category.php');
titiimport('models/product.php');
titiimport('library/category.helper.php');
titiimport('library/product.helper.php');

$title = ' All Products';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;

// Tao moi cac gia tri can dung
$catDB = new CategoryDB();
$cusDB = new CustomerDB();
$proDB = new ProductDB();
//$catList =  $catDB->getCategoies();
$error = '';
$success = '';

// Xu ly tu server gui ve
$proList = $proDB->getProducts();
$cusList = $cusDB->getCustomers();
$catList = $catDB->getCategoies();
$lstCat = $catList->getList();
$catTitle = array("0" => "catid",
                "1" => "name",
                "2" => "author",
                "3" => "created",
                "4" => "modified",
                "5" => "description",
                "6" => "parentid",
            );

require('views/'.$controller.'/'.$action.'.tpl.php');

