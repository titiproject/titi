<?php
/** setting **/
define('BASEURL', 'http://titi.vn/');
define('BASEPATH', dirname(__FILE__).'/');

class pConfig {
    /* Site settings */
    public $offline = '0';
    public $offline_message = 'This site is down for maintance';
    public $offline_image = '';
    public $sitename = 'titi';
    
    /* Database setting */
    public $dbtype = 'mysqli';
    public $host = 'localhost';
    public $user = 'root';
    public $password = 'root';
    public $db = 'titi';
}