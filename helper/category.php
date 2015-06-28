<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function showCategory($catList) {
    $str ="<ul id='menu-categories-menu'>";
    foreach ($catList->getCategoriesActive()->getList() as $k => $v) {
        $str .="<li><a href='#'>".$v->getCatname()."</a></li>";
    }
    $str .="</ul>";
    return $str;
}
