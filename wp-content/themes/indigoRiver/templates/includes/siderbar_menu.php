<div id="pageMenu">
	<div class="menuIcon">
    	<div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>
    <div class="menuSM">
        <a href="https://www.facebook.com/IndigoRiverCreative"><div class="singleMenuSM">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/fb-01.svg">
        </div></a>
        <a href="https://twitter.com/indigoriverco"><div class="singleMenuSM">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/twitter-01.svg">
        </div></a>
        <a href="https://instagram.com/indigo.river/"><div class="singleMenuSM">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/instagram-01.svg">
        </div></a>
    </div>
    <a class="homeNavLogo animated fadeIn" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>
    <div class="nav">
    	<ul>
        	<li><h2 class="white animated fadeInRight"><a href="<?php bloginfo('url');?>">US</a></h2></li>
            <li><h2 class="white animated fadeInRight delay-zero-five"><a href="<?php bloginfo('url');?>">WORK</a></h2></li>
            <li><h2 class="white animated fadeInRight delay-one"><a href="<?php bloginfo('url');?>">CONTACT</a></h2></li>
        </ul>
        <div class="terms">
        	<small>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</small>
        	<br>
            <br>
            <small>indigoRiver 2015 ©</small>
        </div>
    </div>
        <div class="appointments">
        	<div class="navNewsWrapper">
                <ul class="navNews">
                    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li>              
                            <?php 
                                if ( has_post_thumbnail() ) { 
                                // check if the post has a Post Thumbnail assigned to it.
                                    the_post_thumbnail();
                                } 
                            ?>
                        </li>                      
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
            </div>
        </div>
</div>