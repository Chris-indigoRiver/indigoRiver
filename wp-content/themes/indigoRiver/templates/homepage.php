<?php /*
Template Name: Home Page
*/ 
get_header(); ?>

<header>
<a class="homeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>

<?php include('includes/siderbar_menu.php'); ?>

</header>

<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
<<<<<<< HEAD
	<div id="introHome windowHeight">
=======
	<div id="introHome" class="windowHeight">
>>>>>>> 8ed92558998b3851f14fb29835ebc8479d249305
    
    </div>
</div>

<?php endwhile; endif; ?>

<<<<<<< HEAD


=======
>>>>>>> 8ed92558998b3851f14fb29835ebc8479d249305
<?php get_footer(); ?>