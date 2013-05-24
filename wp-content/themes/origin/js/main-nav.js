jQuery(document).ready(function($) {
	$('#menu-page-menu li').hover(function() {
		//Khi chuot di qua doi tuong
		$(this).find('ul:first').css({visibility: 'visible', display: 'none'}).show(400);
	}, function() {
		//Khi chuot ra khoi doi tuong
		$(this).find('ul:first').css({visibility: 'hidden'});
	});
});