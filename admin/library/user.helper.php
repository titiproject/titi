<?php
function backLogin() {
    header('Location:index.php?controller=user&action=login');
}
/**
* checkAdminUser()
*  check admin user is login 
* @param (category) category object
* @return (boolean) object 
*/
function checkAdminUser() {
    if (isset($_SESSION['admin_user']) && isset($_SESSION['admin'])) {
        return true;
    }
    return false;
}
function showError($ms) {
    echo "<div class='ms-error'>$ms</div>";
}
function showSuccess($ms) {
    echo "<div class='ms-sucess'>$ms</div>";
}
function isSelected($value1,$value2) {
    if (!isset($value1)) {echo ""; }
    else echo $value1 == $value2?" selected='selected'":"";
}
function isChecked($value1,$value2) {
    if (!isset($value1)) {echo ""; }
    else echo $value1 == $value2?" checked='true'":"";
}




