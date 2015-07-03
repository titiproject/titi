function removeCart(proid) {
	$.ajax({
		method: 'POST',
		url : 'index.php?controller=cart&action=remove',
		data : {proid : proid}
	}).done(function (data) {
		console.log(data);
	});
}