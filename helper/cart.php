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