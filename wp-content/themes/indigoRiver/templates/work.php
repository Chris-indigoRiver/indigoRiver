<?php /*
Template Name: Work
*/ 
get_header(); ?>

<header>
<a class="homeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_Black-01.svg"></a>

<?php include('includes/siderbar_menu.php'); ?>
	<div class="SM-HomeHorizontal homeSM">
        <a target="_blank" href="https://www.facebook.com/IndigoRiverCreative">
        	<div class="facebook SMimg"></div></a>
        <a target="_blank" href="https://twitter.com/indigoriverco">
        	<div class="twitter SMimg"></div></a>
        <a target="_blank" href="https://instagram.com/indigo.river/">
        	<div class="instagram SMimg"></div></a>
    </div>
</header>

<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
    <article id="workIntro">
        <h1 class="workIntroTitle">Latest from the agency</h1>
        <p class="workIntroCopy">From initial strategy to final concept we are with you every step of the way. We use our hearts to craft ground-breaking insights and compelling communications and our brains to create sophisticated modeling and analytics.</p>
    </article>
    <div id="workWrapper">
        <?php $loop = new WP_Query( array( 'post_type' => 'Journals', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="workItem">                
                <?php 
                    if ( has_post_thumbnail() ) { 
                    // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } 
                ?>
                <div class="workHalfFill">
                    <article class="workContentWrap">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <div id="ourFriends">
        <h2 class="ourFriendsTitle">SOME OF OUR FRIENDS</h2>
        <div class="friendWrap">
            <div class="client">
                <img src="<?php bloginfo('template_url');?>/img/client-logos/logo-client-01.png" alt=""/>
            </div>
        </div>
    </div>
    
    
    
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>