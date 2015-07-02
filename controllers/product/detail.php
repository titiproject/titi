<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET['proid'])) {    $proid = $_GET['proid'];    }
$proDetail = $proList->findProductId($proid);

require('views/'.$controller.'/'.$action.'.tpl.php');
