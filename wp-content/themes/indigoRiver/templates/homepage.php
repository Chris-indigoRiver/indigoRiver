<?php /*
Template Name: Home Page
*/ 
get_header(); ?>

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('includes/sidebar_left.php'); ?>

<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php include('includes/siderbar_menu.php'); ?>

<?php get_footer(); ?>