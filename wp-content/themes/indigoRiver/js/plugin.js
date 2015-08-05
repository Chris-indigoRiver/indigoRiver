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
	
	$( ".menuIcon" ).click(function() {
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			//$('#pageMenu').css('background' , 'transparent');
			$('#pageMenu').delay(100).animate({'width': '99%'}, 500);
			$('#pageLocator').animate({'width': '50%'}, 200);
			$(this).css({'left' : '50px' , 'width' : '10%'});
			$('.nav').css({'display' : 'block'});
			$('.appointments').animate({'width' : '50%'});
			$('.menuLogo').css({'display' : 'block'});
			$('.locatorLine').addClass('animated fadeOut');
			$('.homeNavLogo').css({'display' : 'block'});
			if ($(window).width() <= 600){
				$('.appointments').animate({'width' : '100%'});
			}
		}else{
			//$('#pageMenu').css('background' , '#f9f9f9');
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '11%'}, 200);
			$(this).css({'left' : '50%' , 'width' : '30%'});
			$('.nav').fadeOut();
			$('.appointments').animate({'width' : '0%'});
			$('.menuLogo').css('display' , 'none');
			$('.homeNavLogo').fadeOut();
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

	if ($(window).width() <= 1060){
		$('.joinCTA').css({'height' : '255px'});
		$('.joinCTA h2').css({'padding' : '4% 14% 0% 7%'});
		$('.joinCTA p').css({'padding' : '0% 7%'});
		$('.ourPeopleIntro h1').css({'padding' : '0% 7%' , 'margin-top' : '7.5%'});
		$('.ourPeopleIntro p').css({'padding' : '0% 7%'});
	}
	
});