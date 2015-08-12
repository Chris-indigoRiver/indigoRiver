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
            <?php 
                if ( has_post_thumbnail() ) { 
                // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } 
            ?>    
        </div>
        <div class="journalContent">
            <?php echo the_content(); ?>    
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>