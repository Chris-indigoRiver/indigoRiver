<?php /*
Template Name: Work
*/ 
get_header(); ?>

<?php include('templates/includes/siderbar_menu.php'); ?>
<?php include('templates/includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
    <div class="singleJournal">
        <div id="journalThumbnail">
            <div class="journalThumbnailOpacity">
            </div>
            <h1><?php echo the_title(); ?></h1>
            <h2><?php echo get_field("journal_sub_header"); ?></h2>
            <img src="<?php echo get_field("journal_background_image"); ?>" alt=""/>    
        </div>
        <div class="journalContent">
            <?php echo the_content(); ?>    
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>