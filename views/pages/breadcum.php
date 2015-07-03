<div id="breadcum">
<a href="#">Trang chủ</a>/ 
<a href="#"> 
<?php if(isset($catBreadcum)) echo $catBreadcum->getCatname();
 else {
 	if (isset($breadcum)) echo $breadcum;
 	else echo "Tất cả các sản phẩm"; 
}
 ?>
 </a> 
 </div>