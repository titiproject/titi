<?php 
function calculate_price($cart, $proList) {
	$price = 0.0;
	if (is_array($cart)) {
		foreach ($cart as $k => $v) {
			$proItem = $proList->findProductId($k);
                        $price += $proItem->getPrice() * $v;
		}
	}
        return $price;
}
function calculate_item($cart) {
	$item = 0;
	if (is_array($cart)) {
		foreach($cart as $k => $v) {
			$item += $v;
		}
	}
	return $item;
}

function showDeleteMessage($title, $message,$idaction, $id) {
	echo "<div id='showRemove".$id."' class='message' style='width:30%; height:20%; background:#fff;border-radius:10px;display:none;'>";                                                
    echo "<span class='button b-close'><span>X</span></span>";
    echo "<div class='messageTitle'>$title</div>";
    echo "<div class='messageContent'>$message</div>";
    echo "<div class='messageButton'><p class='btn-success' id='cartremove".$id."' style='margin-left:20%;float:left;'>Xóa</p><p class='btn-success' id='cartcancel".$id."' style='margin-left:20%;float:left;margin-left:20px;'>Hủy bỏ</p></div>";
    echo "</div>";
	echo "<script type='text/javascript'>";
	echo "\$(document).ready(function() {";
	echo "var bp = null;";
	echo "\$('".$idaction."').click(function() { bp =\$('#showRemove".$id."').bPopup({closeClass:'b-close'});$('#cartremoveid').val(".$id.");});";
	echo "\$('#cartremove".$id."').click(function() { removeCart($id);bp.close(); location.reload();});";
	echo "\$('#cartcancel".$id."').click(function() { bp.close();});";
	echo "});";
	echo "</script>";    
}
