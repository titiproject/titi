<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkisEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
    return false;
}
function showErrorTitiImport($ms) {
    echo "<h2 style='color:red'>$ms</h2>";
}
function titiimport($file) {
    if (file_exists($file)) { // kiểm tra xem có controller và action ko    
	require($file);
    } else {
	showErrorTitiImport("Error require file :".$file);
	show_404();
    }
}

function checkControllerActionHome($controller, $action) {
    if ($controller == 'home' && $action == 'index') return true;
    return false;
}
