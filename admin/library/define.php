<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../config.php');
$pconfig = new pConfig();
define('DB_HOST',$pconfig->host);
define('DB_USER', $pconfig->user);
define('DB_PASSWORD', $pconfig->password);
define('DB_DATABASE', $pconfig->db);
