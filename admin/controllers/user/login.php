<?php 
// load Model
require_once('models/account.php');

$title = 'Đăng nhập';

if (isset($_POST['btnCancel'])) {
    header('Location:../index.php');
    unset($_SESSION['admin']);
    unset($_SESSION['admin_user']);
    unset($_SESSION['admin_email']);
    return;
}

// Kiem tra xem co phai la email khong
if (isset($_POST['btnLogin'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);

    $accDB = new AccountDB();
    $accList = $accDB->getAccounts();
    print_r($accDB);
    print_r($accList);
    $error = '';
    if(checkisEmail($user)) {
        $email = $user;
        $kq = $accList->loginEmail($email, $password);
        if ($kq == 0) {
            $error = "Mật khẩu không đúng. Vui lòng nhập lại.";
            $_SESSION['admin'] = 0;
        } else if ($kq == -1) {
            $error =  "Không tồn tại tài khoản";
        } else {
            $_SESSION['admin'] = 1;
            $_SESSION['admin_user'] = $user;
            $_SESSION['admin_id'] = $kq;
            header('Location:index.php?controller=home&action=index');
        }
        $_SESSION['admin'] = 0;
    } else {
        $kq = $accList->loginUsername($user, $password);
        if ($kq == 0) {
            $error = "Mật khẩu không đúng. Vui lòng nhập lại.";
            $_SESSION['admin'] = 0;
        } else if ($kq == -1) {
            $error =  "Không tồn tại tài khoản";
        } else {
            $_SESSION['admin'] = 1;
            $_SESSION['admin_user'] = $user;
            $_SESSION['admin_id'] = $kq;
            header('Location:index.php?controller=home&action=index');
        }
        $_SESSION['admin'] = 0;
    }
    //header('Location:index.php?controller=user&action=login');
}
titiimport('views/'.$controller.'/'.$action.'.tpl.php');