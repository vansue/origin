jQuery(document).ready(function() {
	$('dd:not(:first)').hide();
	$('dt').click(function() {
		$('dt').removeClass('current-question');
		$(this).addClass('current-question');
		$('dd:visible').stop().slideUp(500);
		$(this).next().stop().slideDown(500);
	});
});