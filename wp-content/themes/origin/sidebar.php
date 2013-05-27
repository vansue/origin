<div id='content-wrap'>
    <div id='first-sidebar'>
        <div class='widget'>
            <h2>Side Navigation</h2>
            <?php wp_nav_menu( array('menu'=>'Categories Menu', 'container'=>'') ); ?>
        </div>

        <div class='widget'>
            <h2>RSS feeds</h2>
            <?php if (function_exists('fetch_feed')) {
                include_once(ABSPATH.WPINC.'/feed.php');
                $feed = fetch_feed( 'http://www.izwebz.com/feed' );
                $limit = $feed->get_item_quantity(2);
                $items = $feed->get_items(0, $limit);
                if (!$items) echo "The feed is not available";
                else foreach ($items as $item) : ?>
                    <p class='date'><?php echo $item->get_date('F j, Y'); ?></p>
                    <h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
                    <p><?php echo substr($item->get_description(),0,250); ?></p>
            <?php endforeach;} ?>
        </div>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Left Sidebar')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->


	<?php endif; ?>
    </div><!--end first-sidebar-->
