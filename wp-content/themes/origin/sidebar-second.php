<div id='second-sidebar'>
	<ul class='tabs'>
		<li><a href="#random" class='active'>Random</a></li>
		<li><a href="#news">Recent</a></li>
		<li><a href="#popular">Popular</a></li>
	</ul>
	<div class='tab-container'>
		<div id='random' class='tab-content'>
			<ul>
				<?php global $post;
				$args = array('numberposts'=>10, 'orderby'=>'rand');
				$random_posts = get_posts($args);
				foreach ($random_posts as $post) : setup_postdata( $post ); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</div>

		<div id='news' class='tab-content'>
			<ul>
				<?php wp_get_archives( 'type=postbypost&limit=10' ); ?>
			</ul>
		</div>

		<div id='popular' class='tab-content'>
			<ul>
				<?php global $post;
				$args = array('numberposts'=>10, 'orderby'=>'comment_count');
				$popular_posts = get_posts($args);
				foreach ($popular_posts as $post) : setup_postdata( $post ); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div><!--end tab-container-->

	<div class='widget'>
		<h2>Discussion</h2>
		<?php if(function_exists('jme_display_comments')) { jme_display_comments( array( 3 => '__default__'));} ?>
	</div>
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar( 'Right Sidebar' )) : else : ?>
	<?php endif; ?>
</div><!--end second-sidebar-->
</div><!--end content-wrap-->
