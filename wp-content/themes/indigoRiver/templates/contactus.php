<?php /*
Template Name: Contact Us
*/ 
get_header(); ?>

<header>


	<div class="SM-HomeHorizontal homeSM">
        <a target="_blank" href="https://www.facebook.com/IndigoRiverCreative">
        	<div class="facebookLight SMimg"></div></a>
        <a target="_blank" href="https://twitter.com/indigoriverco">
        	<div class="twitterLight SMimg"></div></a>
        <a target="_blank" href="https://instagram.com/indigo.river/">
        	<div class="instagramLight SMimg"></div></a>
    </div>
</header>

<?php include('includes/siderbar_menu.php'); ?>
<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
    <a class="homeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>    
    <div id="contactUsIntro">
        <div class="background_opaque2"></div>
        <h1 class="contactUsHeader">CONTACT</h1>
    </div>
    <div class="footerContact" id="contactDetails">
        <div class="footerDetails footerLeft">
            <h3>Tel</h3>
            <a href="tel:01527 757010"><p class="white">01527 757010</p></a>
            <h3>Email</h3>
            <a class="white" href="mailto:talk2us@indigo-river.com">talk2us@indigo-river.com</a>
        </div>
        <div class="footerDetails footerCenter">
            <h3>Address</h3>        
            <p>4 Chestnut Court <br>Jill Lane <br>Sambourne <br>B96 6EW</p>
        </div>
        <div class="footerDetails footerRight">
            <h3>Follow</h3>
            <div class="footerSM">
                <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/fb-01.svg"><p>Facebook</p>
            </div>
            <div class="footerSM">
                <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/twitter-01.svg"><p>Twitter</p>
            </div>
            <div class="footerSM">
                <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/icons/instagram-01.svg"><p>Instagram</p>
            </div>   

        </div>
    </div>
    <div id="vacancies">
        <h2 class="vacanciesHeader">AVAILABLE POSITIONS</h2>
        <p class="vacanciesCopy">We’re always looking for people to challenge our thinking and join our growing team – take a little look at the positions we’re looking to fill…</p>
            <div class="accordian">
                <?php $loop = new WP_Query( array( 'post_type' => 'Vacancies', 'posts_per_page' => -1 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="accord-header">
                        <h3><?php echo the_title(); ?></h3>
                        <div class="plus"></div>
                    </div>
                    <div class="accord-content">
                        <?php echo the_content(); ?>
                        <a href="mailto:careers@indigo-river.com">careers@indigo-river.com</a>
                    </div>    
                <?php endwhile; wp_reset_query(); ?>
            </div>
    </div>	
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>