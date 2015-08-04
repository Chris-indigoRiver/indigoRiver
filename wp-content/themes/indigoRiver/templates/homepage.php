<?php /*
Template Name: Home Page
*/ 
get_header(); ?>

<header>
<a class="homeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>

</header>

<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
	<div id="introHome">
    
    </div>
</div>

<?php endwhile; endif; ?>

<?php include('includes/siderbar_menu.php'); ?>

<?php get_footer(); ?>