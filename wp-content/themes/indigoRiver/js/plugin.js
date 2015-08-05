// JavaScript Document

$(document).ready(function(){

	//* responsive classes *//
	
	var bodyheight = $(window).height();
    $(".windowHeight").height(bodyheight);
	
	
	/* ========== Nav ========== */
	
	//* menu nav transition *//
	
	$('#defaultBG').hide();
	$('.nav').hide();
	$('.appointments').hide();
	//$('.homeNavLogo').hide();
	
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
			$('.homeNavLogo').addClass('animated fadeIn');
			if ($(window).width() <= 600){
				$('.appointments').animate({'width' : '100%'});
			}
		}else{
			//$('#pageMenu').css('background' , '#f9f9f9');
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '11%'}, 200);
			$(this).css('left' , '50%');
			$('.nav').fadeOut();
			$('.appointments').animate({'width' : '0%'});
			$('.menuLogo').css('display' , 'none');
			$('.homeNavLogo').addClass('animated fadeIn');
		}
	});
	
	
	//* vertical news slider *//
	
	$('.navNews').bxSlider({
	  mode: 'vertical',
	  slideMargin: 5
	});
	
	
	/* ========== Homepage ========== */
	
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
		$(".peopleIntro").css({'height':($(".ourPeople").height())});
		$(".joinCTA").css({'height':($(".ourPeople").height())});
		$('.ourPeople img').centerImage();

		$('.ourPeople').each(function(){
			$(this).height(ourPeople);
		});

	}

	$(window).resize(function(){
		resizeOurPeople();		
	});
	
});