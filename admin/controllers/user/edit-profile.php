<?php
$title = 'Edit profile';
// load models
//require('models/customer.php');

// getCustomers
$cusDB = new CustomerDB();
$cusList = $cusDB->getCustomers();

// get id account
$id = $_SESSION['admin_id'];
$cus = $cusList->findCustomerId($id);
$error = '';
$success = '';
$urlDefault = "index.php?controller=home&action=index";
$urlAction = 'index.php?controller='.$controller.'&action='.$action;
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address']; 
    $city = $_POST['city'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $zip = $_POST['zip'];
    if (!$cus) { // neu khong co customer thi tao moi customer
        $cus->setId($id);
        $cus->setName($name);
        $cus->setAddress($address);
        $cus->setAvatar($avatar);
        $cus->setCity($city);
        $cus->setCountry($country);
        $cus->setEmail($email);
        $cus->setGender($gender);
        $cus->setName($name);
        $cus->setPhone($phone);
        //$cus->setState($state);
        $cus->setZip($zip);
        $kq = $cusDB->insertCustomer($cus);
        if ($kq) {$success = "Đã cập nhật thành công";$error="";}
        else { $error = "Bị lỗi trong quá trình cập nhật thông tin";$success = "";}
    } else {
        $cus->setId($id);
        $cus->setAddress($address);
        $cus->setAvatar($avatar);
        $cus->setCity($city);
        $cus->setCountry($country);
        $cus->setEmail($email);
        $cus->setGender($gender);
        $cus->setName($name);
        $cus->setPhone($phone);
        //$cus->setState($state);
        $cus->setZip($zip);
        $kq = $cusDB->updateCustomer($cus);
        if ($kq) {$success = "Đã cập nhật thành công"; $error = "";}
        else { $error = "Bị lỗi trong quá trình cập nhật thông tin"; $success = "";}
    }  
}
require 'views/'.$controller.'/'.$action.'.tpl.php';

