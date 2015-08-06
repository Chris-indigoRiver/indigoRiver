// JavaScript Document

$(document).ready(function(){

	//* responsive classes *//
	
	var bodyheight = $(window).height();
    $(".windowHeight").height(bodyheight);

    /* Change Height of work Items */
    var workItemHeight = $(".workItem").width();
    $(".workItem").height(workItemHeight);
	
	
	/* ========== Nav ========== */
	
	//* menu nav transition *//
	
	$('#defaultBG').hide();
	$('.nav').hide();
	$('.homeNavLogo').hide();
	$('.appointments').css({'width' : '0%'});
	
	$( ".menuIcon" ).click(function() {
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			//$('#pageMenu').css('background' , 'transparent');
			$('#pageMenu').delay(100).animate({'width': '100%'}, 500);
			$('#pageLocator').animate({'width': '50%'}, 200);
			$(this).css({'left' : '50px' , 'width' : '10%'});
			$('.menuSM').css({'padding-left' : '50px'});
			$('.nav').css({'display' : 'block'});
			$('.appointments').animate({'width' : '50%'});
			$('.menuLogo').css({'display' : 'block'});
			$('.locatorLine').addClass('animated fadeOut');
			$('.homeNavLogo').css({'display' : 'block'});
			if ($(window).width() <= 600){
				$('.appointments').animate({'width' : '100%'});
				$('#pageMenu').animate({'height': '100%'});
				$('.appointments').hide();
				$('#pageLocator').animate({'width': '100%'}, 200);
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
				$('.menuLogo').fadeOut();
			}
			else {
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '11%'}, 200);
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
	  slideMargin: 5
	});
	
	
	/* ========== Homepage ========== */
	
	$('#homeSelectServices').css('margin-top' , ($(window).height()));

	$('.servicesSlider').bxSlider({
		
	});

	$('.ourPeople').each(function() {
		$(this).height($(this).width() + $(this).width() / 100 * 50);
	});

	$('.ourPeople img').centerImage();

	resizeOurPeople();

	function resizeOurPeople(){
		var ourPeople = $('.ourPeople').first().height();
		console.log(ourPeople);
		//$('.ourPeople').each(function() {
		//	$(this).height($(this).width() + $(this).width() / 100 * 30);
		//});
		$(".ourPeopleIntro").css({'height':($(".ourPeople").height())});
		$(".joinCTA").css({'height':($(".ourPeople").height())});
		$('.ourPeople img').centerImage();

		$('.ourPeople').each(function(){
			$(this).height(ourPeople);
		});

	}

	$(window).resize(function(){
		resizeOurPeople();		
	});

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

});