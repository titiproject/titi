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
                                <?php foreach ($proListActive as $k => $v) {
                                    $urlProDetail = 'index.php?controller=product&action=detail&proid='.$v->getProid();
                                ?>
				<div class="pro">
					<a href="<?php echo $urlProDetail; ?>"><img src="admin/assets/images/<?php echo $v->getImage(); ?>"/></a>
					<p class="title"><a href="<?php echo $urlProDetail; ?>"><?php echo $v->getProname();?> </a></p>
                                        <p class="price">Gia <?php echo number_format($v->getPrice()); ?> VND&nbsp;&nbsp;<a href="#"><i class="fa fa-cart-plus fa-lg"></i></a></p>
				</div>
                                <?php } ?>
				
			</div>
		</div>
	</div>