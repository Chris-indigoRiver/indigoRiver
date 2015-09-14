// JavaScript Document

$(document).ready(function(){

	//scroll animations

	/* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });

	
	/* ========== Nav ========== */
	
	//* menu nav transition *//
	
	$('#defaultBG').hide();
	$('.nav').hide();
	$('.homeNavLogo').hide();
	$('.appointments').css({'width' : '0%'});

	if ($(window).width() <= 600){
		$('.appointments').hide()
	}

	var allowResize = true;
	$( window ).scroll(function() {
	    allowResize = false;
	    clearTimeout( $.data( this, 'scrollCheck' ) );
	    $.data( this, 'scrollCheck', setTimeout(function() {
	        allowResize = true;
	    }, 500) );
	});

	// If resize is allowed -> resize.

	$(window).resize(function() {
	    if (allowResize === true) {
	        // DO STUFF.
	    }}
	);
	
	$( ".menuIcon" ).click(function() {
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			//$('#pageMenu').css('background' , 'transparent');
			if ($(window).width() <= 600){
				$('.appointments').animate({'width' : '100%'});
				$('#pageMenu').animate({'height': '100%'});
				$('.appointments').fadeIn();
				$('#pageLocator').animate({'width': '100%'}, 200);
				$('.homeNavLogo').delay(1000).fadeIn(400);
				$('.nav').css({'display' : 'block'});
			}
			else if ($(window).width() >= 601){
				$('#pageLocator').animate({'width': '50%'}, 200);
				$('#pageMenu').delay(100).animate({'width': '100%'}, 500);
				$(".menuIcon").css({'left' : '50px' , 'width' : '10%'});
				$('.menuSM').css({'padding-left' : '50px'});
				$('.nav').css({'display' : 'block'});
				$('.appointments').animate({'width' : '50%'});
				$('.menuLogo').css({'display' : 'block'});
				$('.locatorLine').addClass('animated fadeOut');
				$('.homeNavLogo').css({'display' : 'block'});
			}
		}else{
			if ($(window).width() <= 600){
				$('.appointments').animate({'width' : '100%'});
				$('#pageMenu').animate({'width': '100%'});
				$('#pageMenu').animate({'height': '55px'})
				$(this).css({'left' : '50%' , 'width' : '30%'});
				$('#pageLocator').animate({'width': '100%'}, 200);
				$('.appointments').hide();
				$('.nav').fadeOut();
				$('.homeNavLogo').fadeOut();
			}
			else {
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '10%'}, 200);
			$(this).css({'left' : '50%' , 'width' : '30%'});
			$('.menuSM').css({'padding-left' : '50%'});
			$('.nav').fadeOut();
			$('.appointments').animate({'width' : '0%'});
			$('.menuLogo').fadeOut();
			$('.homeNavLogo').fadeOut();
			}
		}
	});
	
	
	//* vertical news slider *//
	
	$('.navNews').bxSlider({
	  mode: 'vertical',
	  auto: true,
	  startSlide: 0,
	  preloadImages: 'all',
	  minSlides: 3,
	  maxSlides: 3
	});

	/* ========== Homepage ========== */
	
	$('#helloHome').css('margin-top' , ($(window).height()));

	if ($(window).width() <= 1060){
		$('#helloHome').css('margin-top' , '0');
	}

	$('.servicesSlider').bxSlider({
		mode: 'fade',
		speed: 500,
		auto: true,
		autoDelay: 10000,
		pagerCustom: '#servicesPager',
	    onSlideBefore: function($slideElement, oldIndex, newIndex){
			var title = $slideElement.attr("id");
			$(".serviceName").empty().text(title);
			$('.sliderThumbnail img').centerImage();
			
		}, onSlideAfter: function($slideElement, oldIndex, newIndex) {
				
		}
	});


	$('.ourPeople').each(function() {
		$(this).height($(this).width() + $(this).width() / 100 * 50);
	});

	$('.ourPeople img').centerImage();

	//responsiveness for homepage

	if ($(window).width() <= 1060){
		$('.joinCTA').css({'height' : 'auto' , 'padding' : '15px 0'});
		$('.joinCTA h2').css({'padding' : '4% 14% 0% 7%'});
		$('.joinCTA p').css({'padding' : '0% 7%'});
		$('.ourPeopleIntro').css({'height' : 'auto'});
		$('.ourPeopleIntro h1').css({'padding' : '0% 7%' , 'margin-top' : '7.5%'});
		$('.ourPeopleIntro p').css({'padding' : '0% 7% 5% 7%'});
	}

	/* Contact us Accordian */

	$(".accord-header").click(function() {
		if($(this).next("div").is(":visible")){
			$(this).next("div").slideUp("slow");
		 } else {
			$(".accordion .accord-content").slideUp("slow");
			$(this).next("div").slideToggle("slow");
		 }
	});

	resizeOurPeople();

	$("#videoBG").peach_video();
	$('#videoBG')[0].play();



});

$(window).on('resize', function(){
	resizeOurPeople();	
});

function resizeOurPeople(){	
	
	var bodyheight = $(window).height();
    $(".windowHeight").height(bodyheight);
    $(".mainSlider").height();

    /* Change Height of work Items */
    var workItemHeight = $(".workItem").width();
    $(".workItem").height(workItemHeight);

	var ourPeople = $('.ourPeople').first().height();	
	//$('.ourPeople').each(function() {
	//	$(this).height($(this).width() + $(this).width() / 100 * 30);
	//});
	$(".ourPeopleIntro").css({'height':($(".ourPeople").height())});
	$(".joinCTA").css({'height':($(".ourPeople").height())});
	$('.ourPeople img').centerImage();

	$('.sliderThumbnail img').centerImage();
	$('#journalThumbnail img').centerImage();


	$('.ourPeople').each(function(){
		$(this).height(ourPeople);
	});

	var sliderheight = $('#homeSelectServices').height();
	var sliderheader = $('.sliderHeader').height();
	var sheight = (sliderheight - sliderheader);
	$(".sliderContainer").height(sheight);
	$(".sliderThumbnail").height(sheight);
	$(".sliderText").height(sheight);

	var newsheight = $(".appointments").height();
	var nheight = newsheight / 3;
	$(".navNews li").height(nheight);
}

$(window).on('scroll', function () {

		if(($("#homeSelectServices").offset().top - $(window).scrollTop()) > 100) {			
			$(".locatorLine").css("background", "#CCC");
			$("#LLOne").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("HELLO");
			$(".cd-intro").show();
		} else {
			$("#LLOne").css("background", "#CCC");
		}		
		if(($("#homeSelectServices").offset().top - $(window).scrollTop()) < 100) {
			$(".locatorLine").css("background", "#CCC");
			$("#LLTwo").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("WHAT WE OFFER");
			$(".cd-intro").hide();			
		} else {
			$("#LLTwo").css("background", "#CCC");		
		}		
		if(($("#homeOurPeople").offset().top - $(window).scrollTop()) < 100) {
			$(".locatorLine").css("background", "#CCC");
			$("#LLThree").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("THE TEAM");
			$(".cd-intro").hide();
		} else {
			$("#LLThree").css("background", "#CCC");
		}		
		if(($("#homeValues").offset().top - $(window).scrollTop()) < 100) {
			$(".locatorLine").css("background", "#CCC");
			$("#LLFour").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("VALUES");
			$(".cd-intro").hide();
		} else {
			$("#LLFour").css("background", "#CCC");
		}

		//work

		/*if(($("#workIntro").offset().top - $(window).scrollTop()) > 100) {			
			$(".locatorLine").css("background", "#CCC");
			$("#LLOne").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("STUDIO");
		} else {
			$("#LLOne").css("background", "#CCC");
		}
		if(($("#ourFriends").offset().top - $(window).scrollTop()) < 100) {
			$(".locatorLine").css("background", "#CCC");
			$("#LLTwo").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("CLIENTS");
		} else {
			$("#LLTwo").css("background", "#CCC");		
		}*/

});
