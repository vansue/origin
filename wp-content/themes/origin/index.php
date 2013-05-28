<?php get_header(); 
include (TEMPLATEPATH . '/inc/featured.php');
?>
<?php get_sidebar(); ?>
<div id='main-content'>
	<div class='post'>
		<ul class='links'>
			<?php $videos_links = new WP_Query('showposts=3&cat=11&offset=1');
			while($videos_links->have_posts()) : $videos_links->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		<?php $videos = new WP_Query('showposts=1&cat=11');
		while($videos->have_posts()) : $videos->the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_category(', ') ?></a></h2>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<p class='meta-data'>By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
			<?php comments_popup_link( $zero = '0', $one = '1', $more = '%', $css_class = 'comment-link'); ?>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--end post-->

	<div class='post'>
		<ul class='links'>
			<?php $html_links = new WP_Query('showposts=3&cat=7&offset=1');
			while($html_links->have_posts()) : $html_links->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		<?php $html = new WP_Query('showposts=1&cat=7');
		while($html->have_posts()) : $html->the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_category(', ') ?></a></h2>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<p class='meta-data'>By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
			<?php comments_popup_link( $zero = '0', $one = '1', $more = '%', $css_class = 'comment-link'); ?>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--end post-->

	<div class='post'>
		<ul class='links'>
			<?php $php_links = new WP_Query('showposts=3&cat=6&offset=1');
			while($php_links->have_posts()) : $php_links->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		<?php $php = new WP_Query('showposts=1&cat=6');
		while($php->have_posts()) : $php->the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_category(', ') ?></a></h2>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<p class='meta-data'>By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
			<?php comments_popup_link( $zero = '0', $one = '1', $more = '%', $css_class = 'comment-link'); ?>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--end post-->
</div><!--end main-content-->

<?php get_sidebar('second'); ?>

<?php get_footer(); ?>