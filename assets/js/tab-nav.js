$(document).ready(function() {
	$('.tab_content:not(:first)').hide();// ẩn tất cả các nội dung -- và cho cái đầu tiên hiện ra
	// Khi người dùng click vào cái thứ 2 hiện lên => biến thành active
	$('.tabs li a').click(function() {
		$('.tabs li a').removeClass('active');// xóa active
		$(this).addClass('active');
		// Chuyển nội dung
		//=> ẩn nội dung
		$('.tab_content').hide();

		var activeTab = $(this).attr('href');// Lấy giá trị của tab click
		// activeTab = #news // activeTab = #random
		$(activeTab).fadeIn();
		return false;// không theo đường link => ko cuộn lại
	});
});