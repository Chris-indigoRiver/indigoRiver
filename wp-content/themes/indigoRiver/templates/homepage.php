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
    </article>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>