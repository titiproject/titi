<?php
/**
 * fileUpload($t)
 * @param string $s '09:30:30'
 * **/
function fileUpload($file, $namefile) {
    $path = "assets/images/";
    if($_FILES[$file]['name'] == null) {return null;}
    
    
    if ($_FILES[$file]['error']) {throw new Exception('Loi file'.$_FILES[$file]['error'], 'line 11 ');}
    $type =  $_FILES[$file]['type'];
    $name = $_FILES[$file]['name'];
    $tmp_name =  $_FILES[$file]['tmp_name'];
    //echo $_FILES[$file]['type'].'--'.$_FILES[$file]['name'].'---'.$_FILES[$file]['size'] ;
    if ($type == 'image/jpeg' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/png') {} else
        {throw new Exception("Upload file khong hop le");}
    // Check file size
    if ($_FILES[$file]['size'] > 5000000) { throw new Exception("Sorry, your file is too large. > 5Mb");}
    $fileImageName = renameFileImageUpload($namefile,$type);
    move_uploaded_file($tmp_name,$path.basename($fileImageName));
    return $fileImageName;
}
function renameFileImageUpload($name,$type) {
    $str = $name.".";
    switch ($type) {
        case "image/jpeg": $str.= "jpg";break;
        case "image/jpg": $str.= "jpg"; break;
        case "image/gif": $str.= "gif"; break;
        case "image/png": $str.= "png"; break;
    }
    return $str;
}
/**
 * showParentSelect($t)
 * @param string $s '09:30:30'
 * **/
function showCatnameSelect($catList) {
   $str = "<select id='catid' name='catid' style='width: 150px'>\n";
   //if($iscat) $str.= "<option value='-1'".isSelectedCatPid($_POST['catid'], -1).">no parent cat</option>\n";
   foreach ($catList->getList() as $k => $v) {
       $str .= "<option value='".$k."' ";
       $str.= ">".$v->getCatname()."</option>\n";
   }
   $str .= "</select>\n";
   $str .="<script>$(document).ready(function() {\$('#catid').selectmenu()})</script>";
   echo $str;
   //return $str;
}


function showTBodyProducts($proList,$catList, $cusList) {
    foreach ($proList->getList() as $k => $v) {
        echo "<tr>";
        echo "<td><input type='checkbox' /></td>";
        echo "<td>".$v->getProid()."</td>";
        echo "<td>".$v->getProname()."</td>";
        echo "<td>".showImageProductList($v->getImage())."</td>";
        echo "<td>".number_format($v->getPrice())."</td>";
        echo "<td>".showStatusCategory($v->getStatus())."</td>";        
        echo "<td>".showAuthorCategory($v->getAuthor(), $cusList)."</td>";
        echo "<td>".showDateCurrent($v->getCreated())."</td>";
        echo "<td>".showDateCurrent($v->getModified())."</td>";
        echo "<td>".$v->getDescription()."</td>";
        echo "<td style='width:100px;'>".showCategoryProductList($v->getCatid(), $catList)."</td>";
        echo "<td style='width:70px;'>";
        // edit
        echo "<form id='frmEdit".$v->getProid()."' name='frmEdit' action='index.php?controller=product&action=edit' method='post'>";
        echo "<input type='hidden' name='proid' value='".$v->getProid(),"'/>";
        echo "<a id='edit".$v->getProid()."' name='edit' href='javascript:void(0);' class='btn'><i class='fa fa-edit fa-lg'></i></a>";
        echo "<script>$(document).ready(function(){\$('#edit".$v->getProid()."').click(function() {\$('#frmEdit".$v->getProid()."').submit();});});</script>";
        echo "</form>";
        // delete
        echo "<form id='frmRemove".$v->getProid()."' name='frmRemove' action='index.php?controller=product&action=remove' method='post'>";
        echo "<input type='hidden' name='proid' value='".$v->getProid(),"'/>";
        echo "<a id='remove".$v->getProid()."' name='remove' href='javascript:void(0);' class='btn'><i class='fa fa-remove fa-lg'></i></a>";
        echo "<script>$(document).ready(function(){\$('#remove".$v->getProid()."').click(function() {\$('#frmRemove".$v->getProid()."').submit();});});</script>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
}
/**
 * showImageProductList($image)
 * @param  string $image url
 * @return  string imageurl
 * **/
function showImageProductList($image) {
    $urlImage = "assets/images/".$image;
    $strImage = '';
    if (file_exists($urlImage))  {$strImage =" <img src='".$urlImage."' height='30' width=40' style='margin-bottom:-10px;' />";}
    else {$strImage = "<img src='assets/images/hinh.jpg' height='30' width=40' style='margin-bottom:-10px;' />";}
    return $str = "<div class='i-prolist'>".$strImage
            . "</div>";
}
/**
 * showImageProductEdit($image)
 * @param  string $image url
 * @return  string imageurl
 * **/
function showImageProductEdit($image) {
    $urlImage = "assets/images/".$image;
    $strImage = '';
    if (file_exists($urlImage))  {$strImage =" <img src='".$urlImage."' height='200px' width='70%' style='margin-bottom:-10px;' />";}
    else {$strImage = "<img src='assets/images/hinh.jpg' height='200px' width='70%' style='margin-bottom:-10px;' />";}
    return $str = $strImage;
}
/**
 * convertTimeToSecond($t)
 * @param string $s '09:30:30'
 * **/
function showCategoryProductList($id, $catList) {
   //$catList= new CategoryList();
   $result =$catList->findCategoryId($id);
   if ($result) {
       return $result->getCatname();
   }
   return "no parent";
}


