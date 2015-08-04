// JavaScript Document

$(document).ready(function(){

	//* responsive classes *//
	
	var bodyheight = $(window).height();
    $(".windowHeight").height(bodyheight);
	
	
	//* menu nav transition *//
	
	$('#defaultBG').hide();
	$('.nav').hide();
	
	$( ".menuIcon" ).click(function() {
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			//$('#pageMenu').css('background' , 'transparent');
			$('#pageMenu').delay(100).animate({'width': '99%'}, 500);
			$('#pageLocator').animate({'width': '50%'}, 200);
			$(this).css('left' , '50px');
			$('.nav').css({'display' : 'block'});
			$('.appointments').css({'display' : 'block'});
			$('.menuLogo').css({'display' : 'block'});
			$('.locatorLine').addClass('animated fadeOut');
		}else{
			//$('#pageMenu').css('background' , '#f9f9f9');
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '11%'}, 200);
			$(this).css('left' , '50%');
			$('.nav').css('display' , 'none');
			$('.appointments').css('display' , 'none');
			$('.menuLogo').css('display' , 'none');
		}
	});
	
	
});