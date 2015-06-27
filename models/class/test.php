<meta charset="utf-8"/>
<?php
require '../../config.php';
$pconfig = new pConfig();
require('./account.php');
require('../database/DB.php');
require('../database/account.php');
require('../../library/showData.php');

$accDB = new AccountDB($pconfig);
$accList = $accDB->getAccounts();
showArray($accList);
/*

$c = new Account();
$c->setId('100');
$c->setName('Trần Văn Khải');
$c->setAddress('105 Nguễn Văn Nghi, Q.Gò Vấp');
$c->setGender(0);
$c->setPhone('0123113311');
$c->setEmail('tranvankhai@gmail.com');
echo $c."<br/>";

$u = new Customer();
$u->setId('110');
$u->setName('Trần Thị Dung');
$u->setAddress('105 Nguễn Văn Lượng, Q.Gò Vấp');
$u->setGender(1);
$u->setPhone('0123113999');
$u->setEmail('tranthidung@hotmail.com');
echo $u."<br/>";


$cusLit = new CustomerList();
$cusLit->add($c);
$cusLit->add($u);
showArray($cusLit);

echo "<form action='' method='post'>id<input type='text' name='id' /><input type='submit' name='btnSubmit'  value='find' /></form>";

if (isset($_POST['btnSubmit'])) {
    $id = $_POST['id'];
    $cusF = new Customer();$cusF->setId($id);
    $customer = $cusLit->find($cusF);
    if ($customer) echo $customer;
    else echo "Not found";
}
echo "<form action='' method='post'>id<input type='text' name='id' /><input type='submit' name='btnAdd' value='them' /></form>";

if (isset($_POST['btnAdd'])) {
    $id = $_POST['id'];
    $cusF = new Customer();$cusF->setId($id);
    $cusAdd = $cusLit->add($cusF);
    if ($cusAdd) {echo 'Them thanh cong';showArray($cusLit);}
    else echo 'Co loi, Ban da nhap trung id';
}
echo "<form action='' method='post'>id<input type='text' name='id' /><input type='submit' name='btnDelete' value='Xoa' /></form>";

if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];
    $cusF = new Customer();$cusF->setId($id);
    $cusFlag = $cusLit->remove($cusF);
    if ($cusFlag) { echo 'Them thanh cong';
    showArray($cusLit);
    } else echo 'Co loi, Khong tim thay id de xoa';
}
echo "<form action='' method='post'>id<input type='text' name='id' />name<input type='text' name='name' /><input type='submit' name='btnUpdate' value='Cap nhat' /></form>";

if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $cusF = new Customer();$cusF->setId($id);$cusF->setName($name);
    $cusFlag = $cusLit->update($cusF);
    if ($cusFlag) { echo 'Cap nhat thanh cong';
    showArray($cusLit);
    } else echo 'Co loi, Khong tim thay id de cap nhat';
}