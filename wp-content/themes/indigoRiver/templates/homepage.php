<?php /*
Template Name: Home Page
*/ 
get_header(); ?>

<header>
</header>
<?php include('includes/siderbar_menu.php'); ?>
<?php include('includes/sidebar_left.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mainWrapper">
	<article id="introHome" class="windowHeight">
        <div class="background_opaque_header">
        </div>
        <a class="mobHomeLogo" href="http://indigo-river.com/"><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_White-01.svg"></a>
    	<section class="cd-intro animated fadeIn">
        	<h1 class="cd-headline letters type">
                <span>With Us<br/>it's always<br/></span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">
                    <i>p</i><!--
                    --><i>e</i><!--
                    --><i>r</i><!--
                    --><i>s</i><!--
                    --><i>o</i><!--
                    --><i>n</i><!--
                    --><i>a</i><!--
                    --><i>l</i>
                    </b>
                    <b>
                    <i>t</i><!--
                    --><i>r</i><!--
                    --><i>u</i><!--
                    --><i>e</i>
                    </b>
                    <b>
                    <i>c</i><!--
                    --><i>o</i><!--
                    --><i>u</i><!--
                    --><i>r</i><!--
                    --><i>a</i><!--
                    --><i>g</i><!--
                    --><i>e</i><!--
                    --><i>o</i><!--
                    --><i>u</i><!--
                    --><i>s</i>
                    </b>
                    <b>
                    <i>f</i><!--
                    --><i>r</i><!--
                    --><i>e</i><!--
                    --><i>s</i><!--
                    --><i>h</i>
                    </b>
                    <b>
                    <i>s</i><!--
                    --><i>m</i><!--
                    --><i>a</i><!--
                    --><i>r</i><!--
                    --><i>t</i>
                    </b>
                    <b>
                    <i>i</i><!--
                    --><i>n</i><!--
                    --><i>d</i><!--
                    --><i>i</i><!--
                    --><i>v</i><!--
                    --><i>i</i><!--
                    --><i>d</i><!--
                    --><i>u</i><!--
                    --><i>a</i><!--
                    --><i>l</i>
                    </b>
            </h1>
        </section>
        <section class="introCopy animated slideInUp">
            <!--<p>Hi there, thanks for dropping by. We're an award-winning advertising agency based in Warwickshire. We use strategically brilliant, creatively inspired digital and direct communications to help brands speak to their customers as individuals.</p>-->
            <a href="" class="animated slideInUp"><p>LEARN MORE <span>&#8964;</span> <p></a>
            <!--<p>TEL +44 (0)1527 757010</p>
            <p>EMAIL talk2us@indigo-river.com</p>-->
        </section>
        <div class="accreditationsHome">
            <img src="<?php bloginfo('template_url');?>/img/accreditations2.png" alt="Marketing Agency Digital Rar top 100 agency">
        </div>
    </article>
    <article id="helloHome">
        <div class="helloHomeIntro">
            <div class="helloHomeHeader hideme">
                <h1>Hi There!</h1>
            </div><?php
            ?><div class="helloHomeMessage hideme">
                <p>Thanks for dropping by. We're <span><img src="<?php bloginfo('template_url');?>/img/IndigoRiver_Logo_Black-01.svg"></span> an award-winning advertising agency based in Warwickshire. We use strategically brilliant, creatively inspired digital and direct communications to help brands speak to their customers as individuals.</p>
            </div>
        </div>
        <div class="helloHomeSelect">
            <div class="selectHalf hideme" id="newBusiness">
                <div class="selectHalfFill">
                    <h2>Starting something new?</h2>
                    <p>Need help creating a new brand, app or organising an event?</p>
                </div>
            </div><?php
            ?><div class="selectHalf hideme" id="existingBusiness">
                <div class="selectHalfFill">
                    <h2>Looking to improve your business?</h2>
                    <p>Let us help build upon your existing business</p>
                </div>
            </div>
        </div>
        <div class="helloHomeContact">
            <div class="selectContactThird" id="selectPhone">
                <p>PHONE: <span>01527 757010</span></p>
            </div><?php
            ?><div class="selectContactThird" id="selectEmail">
                <p>EMAIL: <span>talk2us@indigo-river.com</span></p>
            </div><?php
            ?><div class="selectContactThird" id="selectVisit">
                <p>ORGANISE A VISIT</p>
            </div>
        </div>
    </article>
    <article id="homeSelectServices" class="windowHeight">
    	<div class="sliderHeader">
        	<h1 class="slider_title">We Specialise In <span class="serviceName">STRATEGY</span></h1>
            <div id="servicesPager">
                <?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) ); ?>
                <?php $num = 0; ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a data-slide-index="<?php echo $num; ?>" href=""><?php echo the_title(); ?></a>    
                <?php $num++; ?>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>        
        <div class="servicesSliderContainer">
        	<ul class="servicesSlider">
              	<?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li id="<?php echo the_title(); ?>">
                    <!--<h2 class="serviceName"><?php echo the_title(); ?></h2>-->
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
                            <div class="projectExamples">
                                <div class="singularExample animated slideInRight">
                                </div>
                            </div>
                        </div>
                    </div>
              	</li>
                <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
        
    </article>
    <article id="homeOurPeople">
    	<div class="ourPeopleIntro">
        	<h1 class="People_title white">Our People</h1>
            <p class="white">The heartbeat of our agency, where the magic happens. Without these guys and girls none of the things we do would be possible. In fact, there’s only one thing our team cares about more than our business and that’s our clients’ business.</p>
        </div><?php
        ?><div class="ourPeople">
        	<img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/JAY.png" alt="indigoriver digital marketing agency web developer"/>
            <div class="ourPeopleFill">
                <h2>Jay</h2>
                <p>Senior Web Developer</p>
            </div>
            <div class="ourPeopleMobFill mob">
                <h2>Jay</h2>
                <p>Senior Web Developer</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/EMMA-W.png" alt="indigoriver digital marketing agency art director"/>
            <div class="ourPeopleFill">
                <h2>Emma W</h2>
                <p>Art Director</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Emma W</h2>
                <p>Art Director</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/JAX.png" alt="indigoriver digital marketing agency web developer"/>
            <div class="ourPeopleFill">
                <h2>Jax</h2>
                <p>Our Shy Junior Web Developer</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Jax</h2>
                <p>Our Shy Junior Web Developer</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/SARAH.png" alt="indigoriver digital marketing agency financial"/>
            <div class="ourPeopleFill">
                <h2>Sarah</h2>
                <p>Financial & HR</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Sarah</h2>
                <p>Financial & HR</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/DAMIAN2.png" alt="indigoriver digital marketing agency md"/>
             <div class="ourPeopleFill">
                <h2>Damian</h2>
                <p>MD & CD</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Damian</h2>
                <p>MD & CD</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/LORNA2.png" alt="indigoriver digital marketing agency business development"/>
            <div class="ourPeopleFill">
                <h2>Lorna</h2>
                <p>Head of Business Development</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Lorna</h2>
                <p>Head of Business Development</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/CLARE2.png" alt="indigoriver digital marketing agency creative"/>
            <div class="ourPeopleFill">
                <h2>Clare</h2>
                <p>Creative</p>
            </div>
             <div class="ourPeopleMobFill mob">
                 <h2>Clare</h2>
                <p>Creative</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/EMMA-H2.png" alt="indigoriver digital marketing agency operations"/>
            <div class="ourPeopleFill">
                <h2>Emma H</h2>
                <p>Head of Operations</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Emma H</h2>
                <p>Head of Operations</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/JACK2.png" alt="indigoriver digital marketing agency ux &amp; ui"/>
            <div class="ourPeopleFill">
                <h2>Jack</h2>
                <p>UX & UI</p>
            </div>
             <div class="ourPeopleMobFill mob">
                 <h2>Jack</h2>
                <p>UX & UI</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/BOBBI2.png" alt="indigoriver digital marketing agency strategist"/>
            <div class="ourPeopleFill">
                <h2>Bobbi</h2>
                <p>Strategist / Senior Account Manager</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Bobbi</h2>
                <p>Strategist / Senior Account Manager</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/CHRIS.png" alt="indigoriver digital marketing agency web developer"/>
            <div class="ourPeopleFill">
                <h2>Chris</h2>
                <p>Web Developer</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Chris</h2>
                <p>Web Developer</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/SIMON.png" alt="indigoriver digital marketing agency senior artworker"/>
            <div class="ourPeopleFill">
                <h2>Simon</h2>
                <p>Senior Artworker</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Simon</h2>
                <p>Senior Artworker</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/GUNEET.png" alt="indigoriver digital marketing agency creative services"/>
            <div class="ourPeopleFill">
                <h2>Guneet</h2>
                <p>Creative Services Manager</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Guneet</h2>
                <p>Creative Services Manager</p>
            </div>
        </div><?php
		?><div class="ourPeople">
            <img src="http://www.indigo-river.com/wp-content/themes/html5blank-stable/img/people/MITCH.png" alt="indigoriver digital marketing agency account executive"/>
            <div class="ourPeopleFill">
                <h2>Mitch</h2>
                <p>Account Executive</p>
            </div>
             <div class="ourPeopleMobFill mob">
                <h2>Mitch</h2>
                <p>Account Executive</p>
            </div>
        </div><?php
        ?><div class="joinCTA">
            <h2>Intrigued? Join us
            </h2>
            <p>We always love hearing from fun and committed people so if you’re the sort of person who plays seriously and works with a smile on their face.<br> Why not <a href="mailto:careers@indigo-river.com?subject=Hello indigoRiver"><span class="black" style="border-bottom:1px solid; font-weight:800;">drop us a line?</span></a>
            </p>
        </div>
    </article>
    <article id="homeValues">
        <div class="valuesTop">
            <div class="ourBelief">
                <h2 class="white">Our core belief</h2>
                <p class="white">We value courage above all else. Courage to stand up for the things we and our clients believe in, courage to follow our gut instinct when we know it’s right and courage to create brave work that changes how people behave.
                </p>
            </div>
        </div>
        <div class="valuesBottom">
        <div class="valueThird">
            <h3>Our favourite question</h3>
            <p>Why? One little word that can unlock an infinite number of possibilities. Walk around the indigoRiver office and you’ll hear those three letters constantly. Why? Well we’re at our best when we’re pushing boundaries, questioning the way things are and striving to come up with something better.
            </p>
        </div><div class="valueThird">
            <h3>Our thirst for knowledge</h3>
            <p>The more open-minded we are, the better the solutions we come up with. So we’re always seeking to learn more, develop our skills and grow what we know. Conferences, books, magazines, blogs, that tricky crossword at the back of the paper; we love them all.
            </p>
        </div><div class="valueThird">
            <h3>Our environment</h3>
            <p>You don’t come up with ground-breaking ideas if you’re chained to the desk. So we’ve set the place up with plenty of space to be ourselves. Have you ever had a strategy meeting over a game of ping-pong? No? Then drop us a line and we’ll set one up. (Warning: we’re pretty good).
            </p>
        </div>
    </div>
    </article>

    
    
    
</div>



<?php endwhile; endif; ?>

<?php get_footer(); ?>