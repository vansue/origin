jQuery(document).ready(function($) {
	$('.tab-content:not(:first)').hide();
	$('.tabs li a').click(function() {
		$('.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.tab-content').hide();
		var activeTab = $(this).attr('href');
		//activeTab = #news/#random/#popular
		$(activeTab).fadeIn();
		return false;
	});
});