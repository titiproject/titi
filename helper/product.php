<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function showCatProduct($catList, $proList) { // error function
    foreach ($catList->getList() as $k =>$v) {
        showProduct($k, $proList, $catList);
    }
}
function showProductScroll($catid,$proList, $catList) {
    $cat = $catList->findCategoryId($catid);
    $proDS = $proList->getProductsActive($catid);
//    echo "<pre>";print_r($proDS);echo "</pre>";
    echo "<div class='post' id='product' style=''>\n";
    echo "  <h2><a href='#'>".$cat->getCatname()."</a><a style='color:#ce9702;' class='more-product' href='#'>more products</a></h2>\n";
    echo "  <div class='frame' id='basic' style='overflow: hidden;'>\n";
    if (count($proDS) != 0) {
        echo "      <ul class='clearfix' style='transform: translateZ(0px) translateX(-912px); width: 6840px;'>\n";
        foreach ($proDS as $k => $v) {
            echo "<li class='pro'>\n";
            
            //if (file_exists('admin/assets/images/'.$v->getImage())) {
            //    echo "  <a href='".$v->getImage()."'><img src='admin/assets/images/".$v->getImage()."'/></a>\n";
               echo "  <a href='admin/assets/images/".$v->getImage()."'><img src='admin/assets/images/".$v->getImage()."'/></a>\n";
            
            echo "  <p><a href='#'>".$v->getProname()."</a></p>\n";
            echo "  <p class='price'>".number_format($v->getPrice())."VND &nbsp;<a href='#'>&nbsp;<i class='fa fa-cart-plus fa-lg'></a></i></p>\n";
            echo "</li>\n";
        }
        echo "      </ul>\n";  
        echo "  </div>\n";
        echo "  <div class='controls center' style='margin-top:-200px;'>\n";
        echo "      <button class='btn prev' style='float:left;'><i class='fa fa-angle-left fa-3x'></i></button>\n";
        echo "      <button class='btn next' style='float:right;'><i class='fa fa-angle-right fa-3x'></i></button>\n";
        echo "  </div>\n";
    } else {echo "Khong co san pham\n";}
    echo "</div><!-- end post -->\n";
/*echo "
<script>jQuery(function($){'use strict';function () {var $frame  = $('#basic".$catid."');
var $slidee = $frame.children('ul').eq(0);var $wrap   = $frame.parent();
$frame.sly({horizontal: 1,itemNav: 'basic1',smart: 1,activateOn: 'click',mouseDragging: 1,touchDragging: 1,releaseSwing: 1,
startAt: 1,scrollBar: $wrap.find('.scrollbar'),scrollBy: 1,pagesBar: $wrap.find('.pages'),activatePageOn: 'click',
speed: 300,elasticBounds: 1,easing: 'easeOutExpo',dragHandle: 1,dynamicHandle: 1,clickBar: 1,
			// Buttons
forward: $wrap.find('.forward'),backward: $wrap.find('.backward'),prev: $wrap.find('.prev'),
next: $wrap.find('.next'),prevPage: $wrap.find('.prevPage'),nextPage: $wrap.find('.nextPage')});}});</script>";
*/
}
function showProduct($catid, $proList, $catList) {
    $cat = $catList->findCategoryId($catid);
    $proDS = $proList->getProductsActiveDefault($catid);
   // echo "<pre>";print_r($proDS);echo "</pre>";
    if (count($proDS) != 0) {
        echo "<div class='post' id='product' style=''>\n";
        echo "  <h2><a href='#'>".$cat->getCatname()."</a><a style='color:#ce9702;' class='more-product' href='#'>more products</a></h2>\n";  
        echo "  <div class='products'>\n";
            foreach ($proDS as $k => $v) {
                //print_r($proDS[$i]);
                echo "  <div class='pro' style=''>\n";
                echo "  <a href='admin/assets/images/".$v->getImage()."'><img src='admin/assets/images/".$v->getImage()."'/></a>\n"; 
                echo "  <p><a href='#'>".$v->getProname()."</a></p>\n";
                echo "  <p class='price'>".number_format($v->getPrice())."VND &nbsp;<a href='#'>&nbsp;<i class='fa fa-cart-plus fa-lg'></a></i></p>\n";
                echo "</div>\n";
            }
        echo "  </div>\n"; 
        echo "</div><!-- end post -->\n";
    } //else { echo "khong tim thay san pham";}
    
}

