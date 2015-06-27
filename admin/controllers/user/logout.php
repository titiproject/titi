<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (checkAdminUser()) {
    unset($_SESSION['admin']);
    unset($_SESSION['admin_user']);
    unset($_SESSION['admin_id']);
}
header('Location:index.php?controller=user&action=login');
