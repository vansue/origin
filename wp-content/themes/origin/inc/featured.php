<div id='page-info'>
	<div id='featured'>
		<div id='accordion'>
			<dl class='easy-accordion'>
		<?php
			global $post;
			$args = array('numberposts'=>6, 'category'=>3);
			$custom_posts = get_posts($args);
			foreach($custom_posts as $post) : setup_postdata( $post );
		?>
		<dt><?php the_title(); ?></dt>
        	<dd>
        		<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
        		<p>
        			<?php the_post_thumbnail();?>
        			<?php the_excerpt(); ?>
        		</p>
        	</dd>
		<?php
			endforeach;
			wp_reset_postdata();
		?>
    		</dl><!--end easy-accordion-->
		</div><!--end accordion-->
	</div><!--end featured-->

	<div id='facebook'>
		<div id="fb-root"></div>
		<script>
		(function(d, s, id) {
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) return;
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
			 fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-facepile" data-href="https://www.facebook.com/izwebz.fans" data-size="large" data-max-rows="4" data-width="225"></div>
	</div>
</div><!--end page-info-->

<?php

//Cach thuc an toan nhat de tao mot loop rieng biet hoac nhieu loop tren mot trang
	global $post;
	$args = array('numberposts'=>3, 'category'=>5,6,7, 'orderby'=>'rand');
	$custom_posts = get_posts($args);
	foreach ($custom_posts as $post) : setup_postdata( $post );
		# code...
	endforeach;
	wp_reset_postdata();

?>