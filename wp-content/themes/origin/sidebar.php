<div id='content-wrap'>
    <div id='first-sidebar'>
        <div class='widget'>
            <h2>Side Navigation</h2>
            <ul id='menu-categories-menu'>
                <li><a href="#">Home Page</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class='widget'>
            <h2>RSS feeds</h2>
            <p class='date'>August 20, 2012</p>
            <h4><a href='#'>Lorem ipsum dolor sit amet</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Virtutes timidiores.</p>
        </div>
    </div><!--end first-sidebar-->
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->


	<?php endif; ?>
