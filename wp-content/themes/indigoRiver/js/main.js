$(window).resize(function(){
		resizeOurPeople();		
	});

	function resizeOurPeople(){
		
		$('.ourPeople').each(function() {
			$(this).height($(this).width() + 100);
		});
		$(".peopleIntro").css({'height':($(".ourPeople").height())});
		$(".joinCTA").css({'height':($(".ourPeople").height())});
		$('.ourPeople img').centerImage();
	}
		
	$(document).ready(function(){
	
		//$('.workThird img').centerImage();

		
		resizeOurPeople();	
		
		/*$('h1').widowFix();
		$('h2').widowFix();
		$('h3').widowFix();
	    $('p').widowFix();*/
		
		$(".accordion .accord-header").click(function() {
			if($(this).next("div").is(":visible")){
				$(this).next("div").slideUp("slow");
			 } else {
				$(".accordion .accord-content").slideUp("slow");
				$(this).next("div").slideToggle("slow");
			 }
		});
		
		$(".accordionTwo .accord-headerTwo").click(function() {
			if($(this).next("div").is(":visible")){
				$(this).next("div").slideUp("slow");
			 } else {
				$(".accordionTwo .accord-contentTwo").slideUp("slow");
				$(this).next("div").slideToggle("slow");
			 }
		});
		
		$('.Splash').height($(window).height());
		/*setTimeout(function() {
			$('.Splash').fadeOut('fast');
		}, 3500);*/
				
		$(document).on('click', '.sillySausage', function(event) { 
			$('.Splash').fadeOut(300).css('transform' , 'scale(1)');
		});
		$(document).scroll(function(event) { 
			$('.Splash').fadeOut(300).css('transform' , 'scale(1)');
		});
		
			
		/*var waypointoneone = new Waypoint({
		  element: document.getElementById('homeIntro'),
		  handler: function(direction) {
			$('#LLOne').css('background' , '#000');
			$('#LLTwo').css('background' , '#CBCBCB');
		  }
		})
		
		var waypointonetwo = new Waypoint({
		  element: document.getElementById('homeServices'),
		  handler: function(direction) {
			$('#LLOne').css('background' , '#CBCBCB');
			$('#LLTwo').css('background' , '#000');
		  }
		})
		
		var waypointonetwo = new Waypoint({
		  element: document.getElementById('homePeople'),
		  handler: function(direction) {
			$('#LLOne').css('background' , '#CBCBCB');
			$('#LLTwo').css('background' , '##CBCBCB');
			$('#LLThree').css('background' , '#000');
		  }
		})*/
				
		//*$('#fullpage').fullpage({
			//Scrolling
			//scrollOverflow: true,
			//autoScrolling: false,
		//});*/
			
		var slider = $('.bxslider').bxSlider({
			mode: 'fade',
			speed: 500,
			auto: true,
			autoDelay: 10000,
			nextSelector: '#slider-next',
 			prevSelector: '#slider-prev',
  			nextText: '',
  			prevText: '',
			pagerCustom: '#bx-pager',
			onSlideBefore: function($slideElement, oldIndex, newIndex){
				//$('#'+$slideElement.attr('slide')).animate({bottom: $(homeSelectServices).height()-225},300);
				//$('.slideColours:nth-child('+newIndex+')').trigger('click');
				$(".slider_service_title").removeClass("fadeInUp animated");
				$(".slider_service_title").addClass("fadeOutUp animated");	
			}, onSlideAfter: function() {
				$(".slider_service_title").removeClass("fadeOutUp animated");	
				$(".slider_service_title").addClass("fadeInUp animated");
			}
		});
		
		/*$(document).on('click', '.slider_service_title', function(event) { 
			$( "#bx-pager" ).fadeIn();
			
			/*if($(this).hasClass("open")) {
				$(this).removeClass("open");
				//$( ".selectServicesDisc" ).fadeIn();
				$( "#bx-pager" ).fadeOut();
			} else {
				$(this).addClass("open");
				//$( ".selectServicesDisc" ).fadeOut();
				$( "#bx-pager" ).fadeIn();	
			}*/
		
		//});
		
		/*$(document).on('click', '.slideColours', function(event) { 
			$( ".slider_service_title" ).removeClass("open");
			$( ".selectServicesDisc" ).fadeIn();
			$( "#bx-pager" ).fadeOut();
		});*/
		
		
		
		/*$( ".slider_service_title" ).hover(
		  function() {
			$( ".selectServicesDisc" ).fadeOut();
			$( "#bx-pager" ).fadeIn();
		  }, function() {
			$( ".selectServicesDisc" ).fadeIn();
			$( "#bx-pager" ).fadeOut();
		  }
		);*/
		
		
		/*$('.slideColours').on('click', function(){
			var i = $(this).index();
			slider.goToSlide(i-1);
			$(this).prev('.slideColours').animate({bottom: 105},300);
			$(this).prev('.slideColours').prev('.slideColours').animate({bottom: 150},300);
			$(this).next('.slideColours').animate({bottom: 100},300);
			$(this).next('.slideColours').next('.slideColours').animate({bottom: 40},300);
			
			$(this).css({'background' : '#f9f9f9' , '-webkit-transition' : 'background 300ms' , '-moz-transition' : 'background 300ms' , '-o-transition' : 'background 300ms' , 'transition' : 'background 300ms'});
			$('p',this).css('color' , '#202020');
			
		});*/

		$('.bx-next').click(function(){
			$('.hightlightBar').animate({'width' : '0px' , 'left' : '50%'}, 300);
			$('.hightlightBar').animate({'width' : '30%' , 'left' : '35%'}, 300);
		});
		
		$('.bx-prev').click(function(){
			$('.hightlightBar').animate({'width' : '0px' , 'left' : '50%'}, 300);
			$('.hightlightBar').animate({'width' : '30%' , 'left' : '35%'}, 300);
		});
		
		//
		
		$('.bx-prev').hover(function(){
			$('.arrowLineLeftOne').css({'width' : '40%' , '-webkit-transition' : 'ease-out 0.3s' , '-moz-transition' : 'ease-out 0.3s' , '-o-transition' : 'ease-out 0.3s' , 'transition' : 'ease-out 0.3s'});
			$('.arrowLineLeftTwo').addClass('arrowLineLeftTwoRotate');
			$('.arrowLineLeftThree').addClass('arrowLineLeftThreeRotate');
		}, function(){
			$('.arrowLineLeftOne').css({'width' : '80%' , '-webkit-transition' : 'ease-out 0.3s' , '-moz-transition' : 'ease-out 0.3s' , '-o-transition' : 'ease-out 0.3s' , 'transition' : 'ease-out 0.3s'});
			$('.arrowLineLeftTwo').removeClass('arrowLineLeftTwoRotate');
			$('.arrowLineLeftThree').removeClass('arrowLineLeftThreeRotate');
		});
		
		$('.bx-next').hover(function(){
			$('.arrowLineRightOne').css({'width' : '40%' , '-webkit-transition' : 'ease-out 0.3s' , '-moz-transition' : 'ease-out 0.3s' , '-o-transition' : 'ease-out 0.3s' , 'transition' : 'ease-out 0.3s'});
			$('.arrowLineRightTwo').addClass('arrowLineRightTwoRotate');
			$('.arrowLineRightThree').addClass('arrowLineRightThreeRotate');
		}, function(){
			$('.arrowLineRightOne').css({'width' : '80%' , '-webkit-transition' : 'ease-out 0.3s' , '-moz-transition' : 'ease-out 0.3s' , '-o-transition' : 'ease-out 0.3s' , 'transition' : 'ease-out 0.3s'});
			$('.arrowLineRightTwo').removeClass('arrowLineRightTwoRotate');
			$('.arrowLineRightThree').removeClass('arrowLineRightThreeRotate');
		});
		
		//
		
		setTimeout(function(){
			$( ".introImage img" ).animate({
				opacity: 1
			  }, 5000, function() {
			 });
		}, 3000);
				
	
		$('.careersWrap').hide();
		$('.locateTitle p').css('display' , 'none');
		
		$('.locateTitle p').delay(3000, function(){
			(this).css('display' , 'block');
		});
		
		$('.enter').click(function() {
			$(window).scrollTop($('.welcomeImage').offset().top);
		});
		
		$('div.bx-viewport').height($('.selectServicesImg').height);
		
		//Journal
		
		/*$(this).scroll(function(){
			var height = $(window).scrollTop();
			if(height  !=  0) {
				$('.pageHeader').animate({'height' : '140px' , 'padding' : '35px 5%'});
				$('.pageHeader > h2').animate({'padding' : '0% 2%' , 'font-size' : '30px !important'});
				$('.pageSM').animate({'height' : '140px'});
			}else{
				$('.pageHeader').stop();
				$('.pageSM').stop();
				$('.pageHeader').animate({'height' : '500px' , 'padding' : '50px 5%'});
				$('.pageHeader > h2').animate({'padding' : '2% 2% 0% 2%' , 'font-size' : '12vh !important'});
				$('.pageSM').animate({'height' : '500px'});
				
			}
		});*/
		
		//US
		
		$('.lineTopOne').delay(800).animate({'width': '96%'}, 800);
		$('.lineTopTwo').delay(800).animate({'width': '96%'}, 800);
		
		$('.lineLeft').delay(1600).animate({'height': '95%'}, 600);
		$('.lineRight').delay(1600).animate({'height': '95%'}, 600);		
		
		$('.lineBottomOne').delay(2200).animate({'width': '50%'}, 800);
		$('.lineBottomTwo').delay(2200).animate({'width': '50%'}, 800);
		
		
		
		/*$('.lineTopOne').delay(2800).animate({'width': '95%' , 'top': '0px'}, 800);
		$('.lineTopTwo').delay(2800).animate({'width': '95%' , 'top': '0px'}, 800);
		
		$('.lineLeft').delay(2800).animate({'height': '79.7%'}, 800);
		$('.lineRight').delay(2800).animate({'height': '79.7%'}, 800);		
		
		$('.lineBottomOne').delay(2800).animate({'width': '51.9%'}, 800);
		$('.lineBottomTwo').delay(2800).animate({'width': '51.9%'}, 800);*/
				
		var divWidth = $('.square').width(); 

		$(window).ready(function(){
			$('.square').height(divWidth);
			$('div.bx-viewport').height($('.selectServicesImg').height);
			
			$(document).on('click', '#1s', function(event) { 
				event.preventDefault(); 
				$("#bx-pager-link").click(); 
			});
		});	

		$(window).resize(function(){
			$('.square').height(divWidth);
		});	
	
		
		
		$('.beliefImg').each(function() {
			$(this).height($(this).width() + 50);
		});
		$(window).resize(function(){
			$('.beliefImg').height($('.beliefImg').width() + 50);
		});	
				
		var bodyheight = $(window).height();
		console.log(bodyheight);
    	$(".windowHeight").height(bodyheight);
		
		var bodyheight = $(window).height();
    	$(".windowHeightTwo").height(bodyheight + 70);
		
		var bodyheight = $(window).height();
    	$(".windowHalf").height(bodyheight / 2 + 200);
						
        $('.nav').css('display' , 'none');	
		$('.appointments').css('display' , 'none');
		$('.menuLogo').css('display' , 'none');
		
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
		
			
		$('#usBG').hide();
		$('#linkOne').mouseenter(function(){
			$('#usBG').fadeIn(300)/*.css({'-webkit-transition' : '1s linear' , 'transform' : 'scale(2)' , '-moz-transition' : '50s linear' , '-o-transition' : '50s linear' , 'transition' : '50s linear'})*/;
			$('.logo3 img').css('-webkit-filter' , 'invert(100%)');
		});
		$('#linkOne').mouseleave(function(){
			$('#usBG').fadeOut(300).css('transform' , 'scale(1)');
			$('.logo3 img').css('-webkit-filter' , 'invert(0%)');
		});
		
		$('#servicesBG').hide();
		$('#linkTwo').mouseenter(function(){
			$('#servicesBG').fadeIn(300)/*.css({'-webkit-transition' : '1s linear' , 'transform' : 'scale(2)' , '-moz-transition' : '50s linear' , '-o-transition' : '50s linear' , 'transition' : '50s linear'});*/;
			$('.logo3 img').css('-webkit-filter' , 'invert(100%)');
		});
		$('#linkTwo').mouseleave(function(){
			$('#servicesBG').fadeOut(300).css('transform' , 'scale(1)');
			$('.logo3 img').css('-webkit-filter' , 'invert(0%)');
		});
		
		
		$('#journalBG').hide();
		$('#linkThree').mouseenter(function(){
			$('#journalBG').fadeIn(300)/*.css({'-webkit-transition' : '1s linear' , 'transform' : 'scale(2)' , '-moz-transition' : '50s linear' , '-o-transition' : '50s linear' , 'transition' : '50s linear'})*/;;
			$('.logo3 img').css('-webkit-filter' , 'invert(100%)');
		});
		$('#linkThree').mouseleave(function(){
			$('#journalBG').fadeOut(300).css('transform' , 'scale(1)');
			$('.logo3 img').css('-webkit-filter' , 'invert(0%)');
		});
		
		
		$('#contactBG').hide();
		$('#linkFive').mouseenter(function(){
			$('#contactBG').fadeIn(300)/*.css({'-webkit-transition' : '1s linear' , 'transform' : 'scale(2)' , '-moz-transition' : '50s linear' , '-o-transition' : '50s linear' , 'transition' : '50s linear'});*/;
			$('.logo3 img').css('-webkit-filter' , 'invert(100%)');
		});
		$('#linkFive').mouseleave(function(){
			$('#contactBG').fadeOut(300).css('transform' , 'scale(1)');
			$('.logo3 img').css('-webkit-filter' , 'invert(0%)');
		});
		
		
		
		/*$(document).scroll(function(){
			var offset = $('#why').offset().top - $(document).scrollTop();
			if(offset <= 0){
				alert(offset);
			}else{
				
			}		
		});*/
		
		
		$(function(){
			$(window).scroll(function() {
				var $myDiv = $('.smallHalf');
				var st = $(this).scrollTop();
				$myDiv.height( st );
				if( st == 0 ) {
					$myDiv.hide();
				} else {
					$myDiv.show();
				}
			}).scroll();
		})
		
		/*$(".journalSwitch").click(function() {
			$('.journalLeft').animate(function() {
				$(this).width('100%');
			});
			$('.journalRight').animate(function() {
				$(this).width('100%');
			});
		});*/
		
		
		
		$('.journalWrap img').centerImage();
		
		$(".journalSwitch").click(function() {
			$('.journalLeft').toggleClass(".journalLeftTwo");
			$('.journalRight').toggleClass(".journalRightTwo");
		});
		
		$(".careersCTA").click(function() {
			$('html, body').animate({
				scrollTop: $(".careers").offset().top
			}, 300);
			$('.careersWrap').fadeIn('slow');
		});
		
		$('#linkOne').click(function(){
			$('#usNav').animate({"width" : "125px"}, 100);
		});
		$('#linkTwo').click(function(){
			$('#workNav').animate({"width" : "245px"}, 100);
		});
		$('#linkThree').click(function(){
			$('#studioNav').animate({"width" : "300px"}, 100);
		});
		$('#linkFour').click(function(){
			$('#journalNav').animate({"width" : "340px"}, 100);
		});
		$('#linkFive').click(function(){
			$('#contactNav').animate({"width" : "240px"}, 100);
		});
	
		/*$( ".menuIcon" ).hover(
			 function () {
				if(!$(this).hasClass('on')){
					$('.fixed-footer').animate({'height': '80px'}, 300);
				}
			 }, 
			 function () {
				if(!$(this).hasClass('on')){
					 if(!$('.menuIcon').hasClass('on')) {
						$('.fixed-footer').animate({'height': '70px'}, 300);
					 }
				}
			 }
		 );*/
		 
		 $('#why').position(function(){
             if($(this).position().top == 100){
            	alert('checkThis');
        	}
         }); 
		 
		 /*$(window).on('scroll', function () {
			var scrollTop     = $(window).scrollTop(),
				//elementOffset = $('#why').offset().top,
				//distance      = (elementOffset - scrollTop);
				
			//alert('hello');
		
		});*/
		
		$(".journalPost img").hide();
		
		var paras = $('.journalPost img'),
    		i = 0;
			
		/*function animateNav () {
			$(paras[i++]).fadeIn(400, animateNav)
						 .animate({opacity:1,"margin-left":"0"});
						 $('.journalWrap img').centerImage();
		}
		
		animateNav();*/
		
		 
 		 var width = $(window).width();
		 var height = $(window).height();
		 size();
		 $( window ).resize(function() {
			size();
		 });
		 
		 function size() {
			$(".landingMessage").height(height - 20);					 
			$(".slider").height(height);
			$(".slide_con").height(height);
			$(".slidediv").height(height);
			$(".slide_con").width(width);
			$(".slidediv").width(width);	
		 }
	
		$(document).ready(function(){
			
			
		});
		
		
		$(".linkImg").mouseleave(function(){
			var id = $(this).attr('id');
			console.log(id);
			$('img.'+id).fadeOut("100");
			$('img.'+id).css("opacity","0");
		});
		//$("#linkOne").mouseleave(function(){
		//	 $(".nav-image").css("opacity","0").fadeOut("300");
		//});
		
		
		
	});
	
	//$(window).resize(function() {
		//resizeContent();
		//var bodyheight = $(document).height();
		//$(".windowHeight").height(bodyheight);
	//});
	
	
	//responsiveness
	
	
	

	function detect_location(div, pagination, copy) {
	var height = $(div).height();
    var scrollTop     = $(window).scrollTop(),
        elementOffset = $(div).offset().top,
        distance      = (elementOffset - scrollTop);
		
		console.log( div + " / " + distance);
		
		if(($("#homeIntro").offset().top - scrollTop) > -100) {
			$(".locatorLine").css("background", "#CCC");
			$("#LLOne").css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text("HELLO");
		}
		
		if(distance < "-"+height) {
			$(".locatorLine").css("background", "#CCC");
			$(pagination).css("background", "#000");
			$(".locatorText p").empty();
			$(".locatorText p").text(copy);
		} else {
			$(pagination).css("background", "#CCC");
		}
	}
	
		$(document).ready(function(){
		if ($(window).width() <= 800){	
			$('#homeIntro').show();
			$('.menuIcon').on('click', function(){
				if(!$(this).hasClass('expanded')){
					$(this).addClass('expanded');
					$(this).height($(window).height());
				}else{
					$(this).removeClass('expanded');
					console.log('else');
					$(this).height(40 + 'px');
				}
			});
			$('.windowHeight').css('height' , 'auto');
		}	
		else if ($(window).width() >= 801 && $(window).width() <= 1024){
			$('.peopleIntro').css('height' , '280px');
			$('.joinCTA').css('height' , '280px');
			$('.headerIntro').css('padding-left' , '4% !important');
		}
	});
