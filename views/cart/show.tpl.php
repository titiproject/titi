<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<?php require_once 'views/pages/head.php';?>
	<body>
		<div id="wrapper">
                    <?php require_once 'views/pages/header.php';?>
                    <?php require_once 'views/pages/breadcum.php';?>
                    <div id="content" style="overflow:hidden;">
                        <?php if (array_count_values($_SESSION['cart']) != 0) { ?>
                        <div class="carttitle">
                            <ol style="list-style-type: armenian;">
                                <li>1.Giỏ hàng</li>
                                <li>2.Thông tin thanh toán</li>
                            </ol>
                        </div>
                        <div class="cartlist">
                            <form action="index.php?controller=cart&action=update" method="post">
                            <table border="1" bgcolor="#fff">
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
                                echo "<td><a href='index.php?controller=product&action=detail&proid=".$k."'>".$proItem->getProname()."</a></td>";
                                echo "<td><input type='text' name='".$k."'value='".$v."' size='4' maxlength='4' /></td>";
                                echo "<td><b>".number_format($proItem->getPrice(),0,".",".")." đ</b></td>";
                                $tt = $v * $proItem->getPrice();
                                echo "<td><b>".number_format($tt,0,".",".")." đ</b></td>";
                                echo "<td><a href='javascript:void(0);' id='remove".$proItem->getProid()."'><i class='fa fa-trash fa-lg'></i></a></td>";
                                echo "</tr>";                                
                            } ?>
                                <tr>
                                    <td colspan="2"><a class="continue-cart" href="index.php">Tiếp tục mua hàng</a></td>
                                    <td><input type="submit" class="continue-cart" value='save'/></td>
                                    <td><span class='price'>Tổng tiền:</span></td> 
                                    <td><b><?php echo number_format($_SESSION['total_price'],0,".","."); ?> đ </b></td>
                                </tr>
                            </table>
                            </form>
                            <input type='hidden' id='cartremoveid' value="" />
                            <?php 
                            foreach($_SESSION['cart'] as $k => $v) {  
                                $proItem = $proList->findProductId($k);
                                $title = "Thông báo !";
                                $message = 'Bạn có muốn xóa '.$proItem->getProname().' giỏ hàng không ?';
                                $remove = '#remove'.$proItem->getProid();
                                $id = $proItem->getProid();
                                showDeleteMessage($title,$message,$remove,$id);
                            }?>
                            <script type="text/javascript" src='assets/js/cart/removeCart.js'></script>
                        </div>
                        <div class='thanhtoan'>
                        <form action="index.php?controller=cart&action=checkout">
                            <table>
                                <tr><th colspan='2' align='center'>Thông tin thanh toán</th></tr>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type='text' name="name" size="20" /></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><input type='text' name="address" size="20"/></td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input type='text' name="city" size="20"/></td>
                                </tr>
                                <tr>
                                    <td>State/Province:</td>
                                    <td><input type='text' name="state" size="20"/></td>
                                </tr>
                                <tr>
                                    <td>Country :</td>
                                    <td><input type='text' name="country" size="20"/></td>
                                </tr>
                                <tr>
                                    <td>Phone :</td>
                                    <td><input type='text' name="phone" size="20"/></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><input type='text' name="email" size="20"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                    <input  type="submit" class="continue-cart" style='width:30%;float:left;' value="Thanh toán">
                                    <input type='reset' class="continue-cart" style='width:30%; ' value="Hủy bỏ" /></td>
                                </tr>
                            </table>
                            </form>
                        </div>
                        <?php } else {echo "Khong co san pham trong gio hang"; ?>
                        <table>
                            <tr>
                                <td><a class="continue-cart" href="index.php">Tiếp tục mua hàng</a>/td>
                            </tr>
                        </table>
                        <?php }?>
                    </div>
                    <?php require_once 'views/pages/footer.php';?>
                </div><!-- end page-wrap -->
	</body>
</html>