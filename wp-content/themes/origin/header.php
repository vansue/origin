<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	<!--JAVASCRIPT-->
	<!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
	<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/easyAccordionFixed.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/utility.js"></script>
	<!--JAVASCRIPT-->

</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<!--<div class="description"><?php bloginfo('description'); ?></div>-->
		</div>
		<!--TOP BAR-->
		<div id='top-bar' class='group'>
			<?php wp_nav_menu(array('menu'=>'Page Menu', 'conteiner'=>'')); ?>
			<div id='searchBox'>
				<form id='search-form' action="" method="get">
					<input type="text" name="s" id='s' value="" />
					<input type="submit" name="submit" value="Search" />
				</form>
			</div>
		</div><!--end top-bar-->
		<!--TOP BAR-->
