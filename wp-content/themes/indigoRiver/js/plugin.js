// JavaScript Document

$(document).ready(function(){

	//* responsive classes *//
	
	var bodyheight = $(window).height();
    $(".windowHeight").height(bodyheight);
	
	
	//*  *//
	
	$('#defaultBG').hide();
	
	$( ".menuIcon" ).click(function() {
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			$(this).css('background' , 'transparent');
			$(this).delay(100).animate({'width': '99%'}, 500);
			$('.pageLocator').animate({'width': '50%'}, 200);
			$('.nav').css({'display' : 'block'});
			$('.appointments').css({'display' : 'block'});
			$('.menuLogo').css({'display' : 'block'});
			$('.locatorLine').addClass('animated fadeOut');
		}else{
			$(this).css('background' , '#f9f9f9');
			$(this).animate({'width': '10%'}, 500);
			$('.pageLocator').animate({'width': '11%'}, 200);
			$('.nav').css('display' , 'none');
			$('.appointments').css('display' , 'none');
			$('.menuLogo').css('display' , 'none');
		}
	});
	
	
});