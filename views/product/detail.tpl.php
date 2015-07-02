<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<?php require_once 'views/pages/head.php';?>
	<body>
		<div id="wrapper">
                    <?php require_once 'views/pages/header.php';?>
                    <?php require_once 'views/pages/breadcum.php';?>
                    <div id="content">
                        <div class="left">
                                        <div id="main-menu">
                                                <hr/>
                                                <p id="main-menu-toggle"><a href="#">Danh muc sua</a> &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down fa-lg"></i></p>
                                                <ul><li><a href="index.php?catid=0"><i class="fa fa-chevron-right fa-sm"></i>Tất cả các sản phẩm</a></li>
                                                    <?php foreach ($catListActive as $k => $v) { ?>
                                                        <li><a href="index.php?catid=<?php echo $v->getCatid(); ?>"><i class="fa fa-chevron-right fa-sm"></i>&nbsp;<?php echo $v->getCatname(); ?></a></li>						
                                                    <?php }?>
                                                </ul>
                                        </div>
                        </div>
                        <div id="post">
                                <div class="cat">
                                        <hr width="100%" color="red" />
                                        <h2>Sữa bột các loại</h2>
                                        <ul class="menu-ngang">
                                                <li><a href="#">Sản phẩm giảm giá </a></li>
                                                <li><a href="#">Sản phẩm mới</a></li>
                                        </ul>
                                        <div class="sosp"><?php echo count($proListActive); ?> sản phẩm</div>
                                </div>
                                <div class="products">
                                    <div class="prodetail">
                                        <div class="proleft"><img src="admin/assets/images/<?php echo $proDetail->getImage(); ?>"/></div>
                                        <div class="proright">
                                            <?php 
                                                $urlAddCart = "index.php?controller=cart&action=add&proid=".$proDetail->getProid();
                                                $urlShowCart = "index.php?controller=cart&action=show&proid=".$proDetail->getProid();
                                                echo "<p>Tên sản phẩm : ".$proDetail->getProname()."</p>";
                                                echo "<p>Trọng lượng : 900g </p>";
                                                echo "<p>Hãng sản xuất :Netle </p>";
                                                echo "<p>Giá: <span style='color:red'>".number_format($proDetail->getPrice())."&nbsp;VND</span></p>";                                             
                                                echo "<p style='display:none;' id='proid'>".$proDetail->getProid()."</p>";
                                                echo "<p><a href='".$urlAddCart."'>Them vao gio hang<i class='fa fa-cart-plus fa-lg'></i></a></p>";
                                                echo "<p><a href='".$urlShowCart."'>Mua hang<i class='fa fa-shopping-cart fa-lg'></i></a></p>";
                                                echo "</form>";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>       
                    <?php require_once 'views/pages/footer.php';?>
                </div><!-- end page-wrap -->
	</body>
</html>
