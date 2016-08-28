(function($) {

	"use strict";	

	$('.carousel').carousel({
		interval: false
	});

	// jQuery Stick menu		
	$(".navbar").sticky({
		topSpacing: 0,
	});


	$('.nav').singlePageNav({
        currentClass : 'current'
    });


    //Click event to scroll to top
	$('#scroll-to-content').on('click', function(e){
		e.preventDefault();

		$('html,body').animate({
			scrollTop: $('.first-section').offset().top-70
        }, 600);
	});


	//Click event to scroll to top
	$('.go-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

 
	

})(jQuery);