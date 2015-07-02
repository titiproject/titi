<?php
// load config
session_start();
require('../config.php');
require('library/define.php');

// load library
require_once('../library/error.php');
require_once('../library/function.php');
require_once('../models/database/DB.php');
require_once('library/user.helper.php') ;
// load model
require('models/account.php');
require('models/customer.php');


if (checkAdminUser() && !isset($_GET['controller']) && !isset($_GET['action'])) {   backLogin(); return;}
if (!checkAdminUser() && !isset($_GET['controller']) && !isset($_GET['action'])) {    backLogin(); return;}
if ((!checkAdminUser() && isset($_GET['controller']) && isset($_GET['action']))) {
    $controller = $_GET['controller'];$action =  $_GET['action'];
        if (($controller == 'user' && $action == 'login')||($controller == 'user' && $action == 'logout')){
           
        } else { show_404();return false;} 
}
//(checkAdminUser() && isset($_GET['controller']) && isset($_GET['action'])))
// lay user
try {
$user = null;
if (isset($_SESSION['admin_id'])) { 
    $admin_id = $_SESSION['admin_id']; 
    $cusDB = new CustomerDB();
    $cusList = $cusDB->getCustomers();
    //print_r($cusList);
    $user = $cusList->findCustomerId($admin_id);
    //print_r($user);
}} catch (Exception $e) { echo 'Message:'.$e->getMessage();}

//  Xử lý request từ trình duyệt và gọi controller / action tương ứng
if (isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if (isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';
require('views/page/head.php');
if (isset($_SESSION['admin_id'])) {
    $cusDB->db_connect();
    $cusDB->query("set names utf8");
    $cusDB->db_close();
}
$file = 'controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) { // kiểm tra xem có controller và action ko    
	require($file);
} else {
	echo "<h2 style='color:red'>Error require</h2>".$file;
	show_404();
}

