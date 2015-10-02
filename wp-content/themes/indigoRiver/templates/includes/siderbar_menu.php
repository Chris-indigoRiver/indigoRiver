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
            <li><h2 class="white animated fadeInRight delay-zero-five"><a href="<?php bloginfo('url');?>/work">WORK</a></h2></li>
            <li><h2 class="white animated fadeInRight delay-one"><a href="<?php bloginfo('url');?>/contact">CONTACT</a></h2></li>
        </ul>
        <p><a href="<?php bloginfo('url');?>/terms">TERMS</a></p>
        <p><a href="<?php bloginfo('url');?>/cookies">COOKIES</a></p>
    </div>
        <div class="appointments">
        	<div class="navNewsWrapper">
                <ul class="navNews">
                    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 ?>
                        <li style="background: url(<?php echo  $url ?>) center no-repeat;
        background-size: cover;">
                        <div class="menu_opaque">
                        </div>

                            <h2 class="navNewsTitle"><?php echo the_title(); ?></h2>
                            <p class="navNewsExcerpt"><?php echo get_field("custom_excerpt"); ?></p>
                            <?php if(get_field("logo_field")) { ?>
                            <img class="navNewsLogo" src="<?php echo get_field("logo_field"); ?>" alt="indigoRiver Creative marketing agency <?php echo the_title(); ?>" />
                            <?php } ?>
                            <?php 
                                if ( has_post_thumbnail() ) { 
                                // check if the post has a Post Thumbnail assigned to it.
                                    //the_post_thumbnail();
                                } 
                            ?>
                            <div class="menuPostLink">
                                <a href="<?php $url ?>"><p>Learn More</p></a>
                            </div>
                        </li>                      
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
            </div>
        </div>
</div>