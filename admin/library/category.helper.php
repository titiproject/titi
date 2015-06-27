<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
function showTHead($title) {
    if (!is_array($title)) echo "Khong phai la mot mang";
    echo "<thead>";
    echo "<tr>";
    for ($i=0; $i < count($title); $i++) 
        echo "<th>$title[$i]<th>";
    echo "</tr>";
    echo "</thead>";
}*/
function showTBody($catList, $cusList) {

    foreach ($catList->getList() as $k => $v) {
        echo "<tr>";
        echo "<td><input type='checkbox' /></td>";
        echo "<td>".$v->getCatid()."</td>";
        echo "<td>".$v->getCatname()."</td>";
        echo "<td>".showStatusCategory($v->getStatus())."</td>";
        echo "<td>".showAuthorCategory($v->getAuthor(), $cusList)."</td>";
        echo "<td>".showDateCurrent($v->getCreated())."</td>";
        echo "<td>".showDateCurrent($v->getModified())."</td>";
        echo "<td>".$v->getDescription()."</td>";
        echo "<td>".showParentId($v->getParentId(), $catList)."</td>";
        echo "<td>";
        // edit
        echo "<form id='frmEdit".$v->getCatid()."' name='frmEdit' action='index.php?controller=category&action=edit' method='post'>";
        echo "<input type='hidden' name='catid' value='".$v->getCatid(),"'/>";
        echo "<a id='edit".$v->getCatid()."' name='edit' href='javascript:void(0);' class='btn'><i class='fa fa-edit fa-lg'></i></a>";
        echo "<script>$(document).ready(function(){\$('#edit".$v->getCatid()."').click(function() {\$('#frmEdit".$v->getCatid()."').submit();});});</script>";
        echo "</form>";
        // delete
        echo "<form id='frmDelete".$v->getCatid()."' name='frmEdit' action='index.php?controller=category&action=delete' method='post'>";
        echo "<input type='hidden' name='catid' value='".$v->getCatid(),"'/>";
        echo "<a id='delete".$v->getCatid()."' href='javascript:void(0);' class='btn'><i class='fa fa-remove fa-lg'></i></a>";
        echo "<script>$(document).ready(function(){\$('#delete".$v->getCatid()."').click(function() {\$('#frmDelete".$v->getCatid()."').submit();});});</script>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
}
/**Hien thi status của Category **/
function showStatusCategory($status) {
    $str = "";
    if ($status == '1')  $str = "<i class='fa fa-check-circle fa-lg'></i>";
    else if ($status == '0') $str = "<i class='fa fa-imes-circle fa-lg'></i>";
    else $str = "<i class='fa fa-archive fa-lg'></i>";
    $str = "<a href='#'>".$str."</a>";
    return $str;
}
/** Hiển thị tác giả của category **/
function showAuthorCategory($authorid, $cusList) {
    //$cusList = new CustomerList();
    $cus = $cusList->findCustomerId($authorid);
    return $cus->getName();
}
/** Hien thi ngay tao so voi ngay hien tai **/
//showDateCurrent();
function showDateCurrent($date) {
   $data = compareCurrentDate($date);
   $str = "";
   if ($data['mday'] != 0) $str = $data['mday'].' ngày '; else $str = "";
   if ($data['hours'] != 0) $str.= $data['hours'].' giờ'; else $str .= "";
   if ($data['minutes'] != 0) $str.= $data['minutes'].' phút'; else $str .= "";
   if ($str == "") $str ="mới vừa thêm"; else $str .= " trước";
    return $str;
}
function showData($d) {
    echo "<pre>";
    print_r($d);
    echo "</pre>";
}
/**
 * convertSecondToTime($s)
 * @param string $s '09:30:30'
 * **/
function convertSecondToTime($s) {
    $mday = floor($s/(3600*24),1);
    $hours = floor($s / 3600);
    $minutes = floor(($s / 60) % 60);
    $seconds = $s % 60;
    return array(
        "mday"=>$mday,
        "hours"=>$hours,
        "minutes" => $minutes,
        "seconds" => $seconds,
        "totalsec"=>$s
    );
    
}
/**
* convertTimeToSecond($t)
 * @param string $s '09:30:30'
 * **/
function compareCurrentDate($t) {
    $t = getdate(strtotime($t));
    //print_r($t);
    $secondT = $t['seconds'] + $t['minutes']* 60 + $t['hours']*pow(60,2) + $t['yday']*24*3600 ;
    $current= getdate();
    
    $secondCurrent = $current['seconds'] + $current['minutes']* 60 + $current['hours']*pow(60,2)+$current['yday']*24*3600;
    $sogiay = $secondCurrent - $secondT;
    $array = convertSecondToTime($sogiay);
    return $array;
}
/**
 * convertTimeToSecond($t)
 * @param string $s '09:30:30'
 * **/
function showParentId($id, $catList) {
   //$catList= new CategoryList();
   $result =$catList->findCategoryId($id);
   if ($result) {
       return $result->getCatname();
   }
   return "no parent";
}
/**
 * showParentSelect($t)
 * @param string $s '09:30:30'
 * **/
function showParentSelect($catList, $cat = null) {
   $str = "<select id='parentid' name='parentid' style='width: 150px'>\n";
   $str.= "<option value='-1'>no parent cat</option>\n";
   foreach ($catList->getList() as $k => $v) {
       $str .= "<option value='".$k."' ";
        if(isset($cat)) 
            $str .= isSelectedCatPid($cat->getParentId(), $v->getParentId());
        else $str .= isSelectedCatPid($_POST['parentid'], $v->getParentId());
       $str.= ">".$v->getCatname()."</option>\n";
   }
   $str .= "</select>\n";
   echo $str;
   //return $str;
}
function isSelectedCatPid($value1,$value2) {
    //if (!isset($value1)) { return ""; }
 return $value1 == $value2?" selected='selected'":'';
}
