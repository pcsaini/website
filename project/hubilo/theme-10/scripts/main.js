(function($) {
	'use strict';

	var WH 				 	= $(window).height(),
		HTML 				= $('html'),
		LOADER 			 	= $('.loader'),
		HEADER 			 	= $('header'),
		HERO 			 	= $('.hero'),
		SLIDER 			 	= $('.slider'),
		COUNTDOWN 			= $('.countdown'),
		PARALLAX 			= $('.parallax'),
		BURGER 			 	= $('.icon-trigger'),
		Link 				= $('nav .nav-inner li a[href^="#"], .scroll'),
		GALLERY  		 	= $('.grid'),
		PRICE 				= $('.price a'),
		BROWSER 			= { chrome: false, mozilla: false, opera: false, msie: false, safari: false },
		AGENT 				= navigator.userAgent;


	/* ==========================================================================
	   Initialize theme main functions
	========================================================================== */
	var Initialize_Theme = function() {
		Responsive_Options();
		Loader();
		Parallax();
		Navigation.Burger();
		Navigation.Responsive_Burger();
		Resize();
		On_Scroll();
		Miscellaneous();
		Countdown();
		Magnific();
		Gallery();
		Theme_Intro.Image_Slider();
		Forms.Registration();
		Forms.Contact();
		Forms.Subscribe();
		Accordion();
		Tabs();
		Counter();
		Browser();
	},
	Browser = function() {

		if( AGENT.indexOf('Chrome') > -1 ) {
			BROWSER.chrome = true;
		}
		else if( AGENT.indexOf('Safari') > -1 ) {
			BROWSER.safari = true;
		}
		else if( AGENT.indexOf('Opera') > -1 ) {
			BROWSER.opera = true;
		}
		else if( AGENT.indexOf('Firefox') > -1 ) {
			BROWSER.mozilla = true;
		}
		else if( AGENT.indexOf('MSIE') > -1 ) {
			BROWSER.msie = true;
		}

	},
	Responsive_Options = function() {
		$(window).width() <= 1280 ? HTML.addClass('responsive') : HTML.removeClass('responsive');
		$(window).width() <= 1280 ? HEADER.addClass('in-place') : HEADER.removeClass('in-place');
	},
	Loader = function() {
		if( LOADER.length ) {
			setTimeout(function() {
				HTML.addClass('loaded');
			}, 1000);
		}
	},
	Parallax = function() {
		PARALLAX.each(function() {
			var ParallaxImage = $(this).attr('data-background');
			$(this).css({'background-image': 'url(' + ParallaxImage + ')'});
			$(this).parallax('50%', 0.1);
		});
	},
	Navigation = {
		Burger: function() {
			BURGER.on('click', function(event) {
				event.preventDefault();
				$(this).toggleClass('is-active');
				$('.navigation-container').toggleClass('is-active');
			});
		},
		Responsive_Burger: function() {
			$('nav .nav-inner li a').each(function() {
				$(this).on('click', function(event) {
					event.preventDefault();
					if( $(window).width() < 600 ) {
						$('.navigation-container, .icon-trigger').removeClass('is-active');
					}
				});
			});
		}
	},
	Resize = function() {

		$(window).on('resize', function() {
			if( $(this).width() <= 1280 ) {
				HTML.addClass('responsive');
				HEADER.addClass('in-place');
			}
			else {
				HTML.removeClass('responsive');
				HEADER.removeClass('in-place');
			}
		});

	},
	On_Scroll = function() {

		function AfterRefreshFunction() {
			if( !HTML.hasClass('responsive') ) {
				if( $(window).scrollTop() >= 1 ) {
					$('.fixed-bar.horizontal.bottom, .fixed-bar.vertical.left, .fixed-bar.vertical.right, .content-section .owl-nav, .content-section .owl-dots').addClass('not-in-view');
					$('.countdown-section, header').addClass('in-place');
				}
				else {
					$('.fixed-bar.horizontal.bottom, .fixed-bar.vertical.left, .fixed-bar.vertical.right, .content-section .owl-nav, .content-section .owl-dots').removeClass('not-in-view');
					$('.countdown-section, header').removeClass('in-place');
				}
			}
		}
		function ParallaxFixedContent() {
			if( $('.content-section').hasClass('fixed-content') ) {
				var position = ( $(window).scrollTop() ) / 50,
					positionInverse = 1 - ( $(window).scrollTop() ) / 800;
				$('.slide-content').css({
					opacity: positionInverse,
					'-webkit-transform': 'translateY(-'+ position +'%)',
					'-ms-transform': 'translateY(-'+ position +'%)',
					'-o-transform': 'translateY(-'+ position +'%)',
					'transform': 'translateY(-'+ position +'%)'
				});
			}
		}

		$('.main-wrapper').on('click', function() {
			$('.navigation-container, .icon-trigger').removeClass('is-active');
		});

		AfterRefreshFunction();
		$(window).on('scroll', function() {
			AfterRefreshFunction();
			ParallaxFixedContent();

			if( $(window).scrollTop() > 600 ) {
				$('.to-top').addClass('in-place');
			}
			else if( $(window).scrollTop() < 600 ) {
				$('.to-top').removeClass('in-place');
			}

		});

	},
	Miscellaneous = function() {

			$('.to-top').on('click', function(event) {
				event.preventDefault();

		       $('html, body').animate({
		           scrollTop: 0
		       }, 600);
		   });

			Link.on('click', function(event) {
			    event.preventDefault();

			    var target = this.hash,
			    	$target = $(target);

		    	$('html, body').stop().animate({
		    	    scrollTop: $target.offset().top - HEADER.outerHeight()
		    	}, 600);

			});

	    $('.speaker-list li:lt(100)').show();
	    $('.load-speaker-list').on('click', function(event) {
	    	event.preventDefault();

	    	$('.speaker-list li:lt(100)').fadeIn();
	    	$('.speaker-list li:lt(100)').show();
	    });

	},
	Countdown = function() {
		if( COUNTDOWN.length ) {
			var date = COUNTDOWN.attr('data-end'),
				seconds = COUNTDOWN.attr('data-seconds'),
				Have_Seconds;

			COUNTDOWN.countdown({
				date: new Date(date),
				render: function(date) {

					if( seconds === 'true' ) {
						Have_Seconds = '<span>' + (this.leadingZeros(date.sec)) + '<span>Sec</span></span>';
					}
					else {
						Have_Seconds = '';
					}
					return $(this.el).html('<span>' + date.days + '<span>Days</span></span><span>' + (this.leadingZeros(date.hours)) + '<span>Hours</span></span><span>' + (this.leadingZeros(date.min)) + '<span>Min</span></span>' + Have_Seconds);
				}
			});
		}
	},
	Magnific = function() {
		if( $('.grid a').length ) {
			$('.grid a').magnificPopup({
				type: 'image',
				closeOnContentClick: false,
				closeBtnInside: false,
				mainClass: 'mfp-with-zoom mfp-img-mobile',
				image: {
					verticalFit: true,
					titleSrc: function(item) {
						return item.el.attr('title');
					}
				},
				gallery: {
					enabled: true,
					tPrev: 'Previous (Left arrow key)',
					tNext: 'Next (Right arrow key)',
					tCounter: ''
				},
				zoom: {
					enabled: true,
					duration: 300,
					opener: function(element) {
						return element.find('img');
					}
				}
			});
		}
		if( $('.video-popup').length ) {
			$('.video-popup').magnificPopup({
				items: {
					src: $('.video-popup').attr('href')
				},
				type: 'iframe',
				iframe: {
					markup: '<div class="mfp-iframe-scaler">'+
				        '<div class="mfp-close"></div>'+
				        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
				      	'</div>',
				    patterns: {
				    	youtube: {
				    		index: 'youtube.com/',
				    		id: 'v=',
				    		src: '//www.youtube.com/embed/%id%?autoplay=1'
				    	}
				    },
				    srcAction: 'iframe_src'
				}
			});
		}
	},
	Gallery = function() {
		if( GALLERY.length ) {
			GALLERY.masonry();
		}
	},
	Slider = function( element ) {
		if( element.length ) {
			element.each(function() {
				var that = $(this),
					SliderItems = that.attr('data-items'),
					SliderAutoplay = that.attr('data-autoplay'),
					SliderItemsNavigation = that.attr('data-navigation'),
					SliderItemsDots = that.attr('data-pagination'),
					SAutoplay, NavigationItems, NavigationDots;

				SliderAutoplay === 'true' ? SAutoplay = true : SAutoplay = false;
				SliderItemsNavigation === 'true' ? NavigationItems = true : NavigationItems = false;
				SliderItemsDots === 'true' ? NavigationDots = true : NavigationDots = false;

				$(this).owlCarousel({
					items: SliderItems,
					autoplay: SAutoplay,
					nav: NavigationItems,
					dots: NavigationDots,
					navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
					responsive: {
						0: {
							items: 1
						},
						768: {
							items: 1
						},
						769: {
							items: SliderItems
						}
					}
				});
			});
		}
	},
	Theme_Intro = {
		Image_Slider: function() {
			if( HERO.hasClass('fullscreen') ) {
				HERO.height(WH);
				Slider(SLIDER);
			}
		}
	},
	Forms = {
		Registration: function() {
			PRICE.each(function() {
				var that = $(this),
					RegistrationForm = $('.registration-form');
				that.on('click', function(event) {
					event.preventDefault();
					RegistrationForm.addClass('active');
				});
				$('.registration-wrapper .close').on('click', function(event) {
					event.preventDefault();
					RegistrationForm.removeClass('active');
				});
			});

			$('.registration-form form button[type="submit"]').on('click', function(event) {

				var that = $(this),
					form = that.parents('form'),
					error = false,
					Serialize_Form = that.parents('form').serialize(),
					required = form.find('.required');

				required.removeClass('error');
				required.each(function() {
					if( $.trim($(this).val()) == '' || $.trim($(this).val()) == $.trim($(this).attr('placeholder')) ) {
						$(this).addClass('error');
						error = true;
					}
					if( $(this).attr('name') === 'registration-email' ) {
						var email = $(this).attr('type', 'email').val(),
							Pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						if( !Pattern.test(email) ) {
							$(this).addClass('error');
							error = true;
						}
					}
				});

				if( !error ) {
					$.ajax({
					  url: 'inc/registration.php',
					  type: 'post',
					  data: Serialize_Form
					});
					form.addClass('success-form');
					form[0].reset();
					setTimeout(function() {
						$('.registration-form').removeClass('active');
					}, 2000);
				}
				event.preventDefault();
			});
		},
		Contact: function() {
			
			$('form.contact-form button[type="submit"]').on('click', function(event) {

				var that = $(this),
					form = that.parents('form'),
					error = false,
					/*Serialize_Form = that.parents('form').serialize(),*/
					required = form.find('.required'),
					captcha = form.find('.captcha').attr('data-math'),
					captcha_Split = captcha.split(' '),
					captcha_First = parseInt(captcha_Split[0], 10),
					captcha_Second = parseInt(captcha_Split[2], 10),
					captcha_Equal = captcha_First + captcha_Second;

				required.removeClass('error');
				required.each(function() {
					if( $.trim($(this).val()) == '' || $.trim($(this).val()) == $.trim($(this).attr('placeholder')) ) {
						$(this).addClass('error');
						error = true;
					}
					if( $(this).attr('name') === 'email' ) {
						var email = $(this).attr('type', 'email').val(),
							Pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						if( !Pattern.test(email) ) {
							$(this).addClass('error');
							error = true;
						}
					}
					if( $('.captcha').val() != captcha_Equal ) {
						$('.captcha').addClass('error');
						error = true;
					}
				});
				

				if( !error ) {
					$.ajax({
					  url: '../mail.php',
					  type: 'post',
					  data: Serialize_Form
					});
					form.addClass('success-form');
					form[0].reset();
				}
				event.preventDefault();
			});

		},
		Subscribe: function() {

			$('form.subscribe button[type="submit"]').on('click', function(event) {

				var that = $(this),
					form = that.parents('form'),
					error = false,
					Serialize_Form = that.parents('form').serialize(),
					required = form.find('.required');

				required.removeClass('error');
				required.each(function() {
					var email = $(this).val(),
						Pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if( !Pattern.test(email) ) {
						$(this).addClass('error');
						error = true;
					}
				});

				if( !error ) {
					$.ajax({
					  url: 'inc/subscribe.php',
					  type: 'post',
					  data: Serialize_Form
					});
					form[0].reset();
				}
				event.preventDefault();
			});

		}
	},
	Accordion = function() {

		var All_Panels = $('.accordion > dd').hide();
		All_Panels.first().slideDown(300);

		$('.accordion > dt > a').first().addClass('active');
		$('.accordion > dt > a').on('click', function(){

			var current = $(this).parent().next('dd');

			$('.accordion > dt > a').removeClass('active');
			$(this).addClass('active');

			All_Panels.not(current).slideUp(300);
			$(this).parent().next().slideDown(300);

			return false;

		});

		$('.toggle > dd').hide();
		$('.toggle > dt > a').on('click', function(){
		
		    if ($(this).hasClass('active')) {
		    
		        $(this).parent().next().slideUp(300);
		        $(this).removeClass('active');
		        
		    }
		    else {
		        $(this).addClass('active');
		        $(this).parent().next().slideDown(300);
		    }
		    
		    return false;
		});

	},
	Tabs = function() {

		var Tabs = $('.tabs'),
			Triggers = Tabs.children().children('a'),
			Tabs_Content = Tabs.parent().children('.tabs-content');

		Tabs_Content.children('.active').show();

		Tabs.each(function() {
			Triggers.on('click', function(event) {

				event.preventDefault();
				var target = $(this).attr('href');

				Triggers.removeClass('active');
				$(this).addClass('active');

				Tabs_Content.children().hide();
				$(target).fadeIn().show();

			});
		});

	},
	Counter = function() {
		if( $('.counter-number').length ) {
			$('.counter-number').counterUp({
	            delay: 10,
	    		time: 3000
	        });
        }
	};

	Initialize_Theme();

})(jQuery);

$(function(){
	$('.tab-section').hide();
	$('#tabs a').bind('click', function(e){
		$('#tabs a.current').removeClass('current');
		$('.tab-section:visible').hide();
		$(this.hash).show();
		$(this).addClass('current');
		e.preventDefault();
	}).filter(':first').click();
});

jQuery(function(){

    var minimized_elements = $('div.minimize');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 300) return;
        
        $(this).html(
            t.slice(0,300)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(300,t.length)+' <a href="#" class="less">Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });

});


    