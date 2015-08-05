<?php /*
Template Name: Home Page
*/ 
get_header(); ?>

<header>
<a class="homeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>

<?php include('includes/siderbar_menu.php'); ?>
	<div class="SM-HomeHorizontal homeSM">
        <a target="_blank" href="https://www.facebook.com/IndigoRiverCreative">
        	<div class="facebookLight SMimg"></div></a>
        <a target="_blank" href="https://twitter.com/indigoriverco">
        	<div class="twitterLight SMimg"></div></a>
        <a target="_blank" href="https://instagram.com/indigo.river/">
        	<div class="instagramLight SMimg"></div></a>
    </div>
</header>

<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
	<article id="introHome" class="windowHeight">
    	<section class="cd-intro animated fadeIn">
        	<h1 class="cd-headline">With Us<br/>it's always<br/></h1>
        </section>
        <section class="introCopy animated fadeIn">
            <p>Hi there, thanks for dropping by. We're an award-winning advertising agency based in Warwickshire. We use strategically brilliant, creatively inspired digital and direct communications to help brands speak to their customers as individuals.</p>
            <a href="">Change how your business talks →</a>
            <p>TEL +44 (0)1527 757010</p>
            <p>EMAIL talk2us@indigo-river.com</p>
        </section>
        <div class="accreditationsHome">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/accreditations2.png" alt="Marketing Agency Digital Rar top 100 agency">
        </div>
    </article>
    <article id="homeSelectServices" class="windowHeight">
    	<div class="header">
        	<h1 class="slider_title">We Specialise In</h1>
        </div>
        
        <div class="slider">
        	<ul class="servicesSlider">
              	<?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li>
                    <div class="sliderContainer">
                        <div class="sliderThumbnail" id="">
                            <?php 
								if ( has_post_thumbnail() ) { 
								// check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail();
								} 
							?>
                        </div>
                        <div class="sliderText" id="">
                            <?php the_content(); ?>
                        </div>
                    </div>
              	</li>
                <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
        
    </article>
    
    
    
    
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>