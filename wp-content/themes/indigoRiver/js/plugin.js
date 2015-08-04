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
			$(this).css({'left' : '50px' , 'width' : '10%'});
			$('.nav').css({'display' : 'block'});
			$('.appointments').animate({'width' : '50%'});
			$('.menuLogo').css({'display' : 'block'});
			$('.locatorLine').addClass('animated fadeOut');
		}else{
			//$('#pageMenu').css('background' , '#f9f9f9');
			$('#pageMenu').animate({'width': '10%'}, 500);
			$('#pageLocator').animate({'width': '11%'}, 200);
			$(this).css('left' , '50%');
			$('.nav').fadeOut();
			$('.appointments').animate({'width' : '0%'});
			$('.menuLogo').css('display' , 'none');
		}
	});
	
	
});