<?php /*
Template Name: Work
*/ 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('templates/includes/siderbar_menu.php'); ?>
<?php include('templates/includes/sidebar_left.php'); ?>

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
    <div class="postFooterContainer">
        <?php
            $Image = get_previous_post();
            $attr = wp_get_attachment_image_src( get_post_thumbnail_id( $Image->ID ), 'single-post-thumbnail' );
        ?>
        <div class="postFooterPrev" style="background:url(<?php echo $attr[0]; ?>);">
            <div class="postControlsOpaque">
            </div>
            <h2 class="previousHeader"><?php
                echo previous_post('%', 'PREVIOUS', 'no');
            ?></h2>
            <?php 
                echo '<div class="previousJournalPost">' . previous_post('%', '', 'yes') . '</div>';
            ?>
        </div><?php
        ?><?php
            $Image = get_next_post();
            $attr = wp_get_attachment_image_src( get_post_thumbnail_id( $Image->ID ), 'single-post-thumbnail' );
        ?><div class="postFooterNext"  style="background:url(<?php echo $attr[0]; ?>); ">
            <div class="postControlsOpaque">
            </div>
            <h2 class="nextHeader"><?php
                echo next_post('%', 'NEXT', 'no'); 
            ?></h2>
            <?php
                echo '<div class="nextJournalPost">' . next_post('%', '', 'yes') . '</div>'; 
            ?>
        </div>
        <div class="postFooterBack">
            <a href="<?php bloginfo('url');?>/work"><h2>Back to featured works</h2></a>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>