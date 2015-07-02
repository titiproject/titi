<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<?php require_once 'views/pages/head.php';?>
	<body>
		<div id="wrapper">
                    <?php require_once 'views/pages/header.php';?>
                    <?php require_once 'views/pages/breadcum.php';?>
                    <div id="content">
                        <?php if (array_count_values($_SESSION['cart']) != 0) { ?>
                        <div class="title">
                            <ol style="list-style-type: armenian;">
                                <li>1.Giỏ hàng</li>
                                <li>2.Thông tin thanh toán</li>
                            </ol>
                        </div>
                        <div id="cartlist">
                            <table border="1" bgcolor="#ccc" style="border:1px solid blue;">
                                <tr>
                                    <th colspan="2" align="left">Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            <?php 
                            foreach($_SESSION['cart'] as $k => $v) {
                                
                                $proItem = $proList->findProductId($k);
                                echo "<tr>";
                                echo "<td> <img src='admin/assets/images/".$proItem->getImage()."' height='50' width='50'/></td>";
                                echo "<td style='vertical-align:top; margin-top:20px;'><a href='index.php?controller=product&action=detail&proid=".$k."'>".$proItem->getProname()."</a></td>";
                                echo "<td>$v</td>";
                                echo "<td>".number_format($proItem->getPrice())."</td>";
                                $tt = $v * $proItem->getPrice();
                                echo "<td>".number_format($tt)."</td>";
                                echo "<td></td>";
                                echo "</tr>";
                            } ?>
                                <tr>
                                    <td colspan="3"><a href="index.php">Tiếp tục mua hàng</a></td>
                                    <td>Tổng cộng:</td>
                                    <td><?php echo number_format($_SESSION['total_price']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div >
                            
                        </div>
                        <?php } else {echo "Khong co san pham trong gio hang"; ?>
                        <table>
                            <tr>
                                <td><a class="button" href="#"></a></td>
                            </tr>
                        </table>
                        <?php }?>
                    </div>
                    <?php require_once 'views/pages/footer.php';?>
                </div><!-- end page-wrap -->
	</body>
</html>