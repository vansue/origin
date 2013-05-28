<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id='main-content'>
	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>

		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>

		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h3>Archive for <?php the_time('F jS, Y'); ?></h3>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h3>Archive for <?php the_time('F, Y'); ?></h3>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h3>Archive for <?php the_time('Y'); ?></h3>

		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h3>Author Archive</h3>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h3>Blog Archives</h3>

		<?php } ?>
	<div class='post'>
		<?php while(have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<p class='meta-data'>By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
			<?php comments_popup_link( $zero = '0', $one = '1', $more = '%', $css_class = 'comment-link'); ?>
		<?php endwhile; else: ?>
		<h3>Nothing found!</h3>
		<?php endif; ?>
	</div><!--end post-->
</div><!--end main-content-->
<?php get_sidebar('second'); ?>
<?php get_footer(); ?>