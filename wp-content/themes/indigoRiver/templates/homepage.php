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
    	<div class="homeHeader4">
            <h1 class="slider_title"><span>We Specialise In</span></h1>
            <ul class="bxslider">
                <li slide="1s" >
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="strategyUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Strategy</u></span></h1>
                    <div class="selectServicesImg" id="strategyServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>The beginning and end of every project. Long before the first ad takes shape we’re hard at work creating an insightful strategy. Everything we do is then held up against this benchmark; if it doesn’t fit, it doesn’t run. And long after the campaign is over it’s the strategy that we use to test its effectiveness.
                        </p>
                    </div>
                </li>
                <li slide="2s">
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="brandingUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Branding</u></span></h1>
                    <div class="slideGradient">
                    </div>
                    <div class="selectServicesImg" id="brandingServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>The brand is the heart and soul of any business. Whether we’re rebranding headed notepaper or a whole office we take our responsibility very seriously. As ever, we constantly ask ourselves ‘why?’ to ensure that each element of the rebrand actually enhances your business.
                        </p>
                    </div>
                </li>
                <li slide="3s">
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="digitalUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Digital</u></span></h1>
                    <div class="selectServicesImg" id="digitalServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>Digital can seem a baffling area so we pledge to only ever recommend those channels that are best suited to the needs of your firm. We offer a full portfolio of digital services, from banners and emails to apps and websites. And to ensure you always get maximum exposure we’re also experts in SEO and PPC.
                        </p>
                    </div>
                </li>
                <li slide="4s" >
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="ppUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Print & Press</u></span></h1>
                    <div class="selectServicesImg" id="printServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>Traditional media remains a key component of many successful marketing campaigns and it’s a discipline in which we have many years of experience. From long copy press ads to highly visual billboards, if it builds your business we can make it happen.
                        </p>
                    </div>
                </li>
                <li slide="5s">
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="videoUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Video</u></span></h1>
                    <div class="selectServicesImg" id="videoServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>4G Internet, smartphones and tablets have driven an upsurge in high quality content videos-it’s how the Internet shares content. We’re experts in creating slickly crafted videos that demand to be passed on.</p>
                    </div>
                </li> 
                <li slide="6s">
                    <div class="servicesHeaderBG">
                    </div>
                    <div class="servicesHeaderUnderline" id="eventsUnderline">
                    </div>
                    <h1 class="slider_service_title"><span><u>Events</u></span></h1>
                    <div class="selectServicesImg" id="eventsServiceImg">
                    </div>
                    <div class="selectServicesDisc">
                        <p>An event can be the perfect way to launch a rebrand or a new product but the sheer complexity of making it all happen on the day can be off-putting. So we take care of everything from idea conception to event management and publicity.</p>
                    </div>
                </li> 
            </ul>
            <div id="bx-pager">
                <a class="slideColours fadeInDown animated delay-zero-five" data-slide-index="0" href=""><p>STRATEGY</p></a>
                <a class="slideColours fadeInDown animated delay-one" data-slide-index="1" href=""><p>BRANDING</p></a>
                <a class="slideColours fadeInDown animated delay-one-five" data-slide-index="2" href=""><p>DIGITAL</p></a>
                <a class="slideColours fadeInDown animated delay-one-five" data-slide-index="3" href=""><p>PRINT & PRESS</p></a>
                <a class="slideColours fadeInDown animated delay-one" data-slide-index="4" href=""><p>VIDEO</p></a>
                <a class="slideColours fadeInDown animated delay-zero-five" data-slide-index="5" href=""><p>EVENTS</p></a>
            </div>
        </div>
    </article>
    
    
    
    
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>