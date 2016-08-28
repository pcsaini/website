/*
Name: 			Home
Written by: 	JanXcode Themes - (http://www.janxcode.com)
Version: 		1.0
*/

(function() {

	"use strict";

	var Home = {

		initialized: false,

		initialize: function() {

			if (this.initialized) return;
			this.initialized = true;

			this.build();
			
			this.menu();

		},

		build: function(options) {

			
			// Home Slider#1
			// Revolution Slider Initialize
			
			$(".home-slider-1 .tp-banner").each(function() {

				var slider = $(this);

				var defaults = {
					delay: 9000,
					startheight: 750,
					startwidth: 960,

					hideThumbs: 10,

					thumbWidth: 100,
					thumbHeight: 50,
					thumbAmount: 5,

					navigationType: "both",
					navigationArrows: "verticalcentered",
					navigationStyle: "preview1",

					touchenabled: "on",
					onHoverStop: "on",

					navOffsetHorizontal: 0,
					navOffsetVertical: 20,

					stopAtSlide: 0,
					stopAfterLoops: -1,

					shadow: 0,
					fullWidth:"on",
					//forceFullWidth:"off",
					videoJsPath: "vendor/rs-plugin/videojs/"
				}

				var config = $.extend({}, defaults, options, slider.data("plugin-options"));

				// Initialize Slider
				var sliderApi = slider.revolution(config).addClass("slider-init");


			});			

			
		},
		
		menu:function(){
			
			jQuery(document).ready(function($){
			var isLateralNavAnimating = false;
			
			//open/close lateral navigation
				$('.jx-nav-trigger').on('click', function(event){
					event.preventDefault();
					//stop if nav animation is running 
					if( !isLateralNavAnimating ) {
					if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
					
					$('body').toggleClass('navigation-is-open');
					
					$('.jx-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//animation is over
						isLateralNavAnimating = false;
					});
					}
				});
			
			//EOF Menu Style#1
			
			//BOF Menu Style#2
			//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
			var MQL = 1170;
		
			//primary navigation slide-in effect
			if($(window).width() > MQL) {
				var headerHeight = $('header').height();
				$(window).on('scroll',
				{
					previousTop: 0
				}, 
				function () {
					var currentTop = $(window).scrollTop();
					//check if user is scrolling up
					if (currentTop < this.previousTop ) {
						//if scrolling up...
						if (currentTop > 0 && $('header').hasClass('is-fixed')) {
							$('header').addClass('is-visible');
						} else {
							$('header').removeClass('is-visible is-fixed');
						}
					} else {
						//if scrolling down...
						$('header').removeClass('is-visible');
						if( currentTop > headerHeight && !$('header').hasClass('is-fixed')) $('header').addClass('is-fixed');
					}
					this.previousTop = currentTop;
				});
			}
		
			//open/close primary navigation
			$('.jx-primary-nav-trigger').on('click', function(){
				$('.jx-menu-icon').toggleClass('is-clicked'); 
				$('header').toggleClass('menu-is-open');
				
				//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
				if( $('.jx-primary-nav').hasClass('is-visible') ) {
					$('.jx-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
						$('body').removeClass('overflow-hidden');
					});
				} else {
					$('.jx-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
						$('body').addClass('overflow-hidden');
					});	
				}
			});
			//EOF Menu Style#2
			
			//BOF Menu Style#3
			var $lateral_menu_trigger = $('#jx-menu-trigger'),
				$content_wrapper = $('.jx-main-content'),
				$navigation = $('header');
		
			//open-close lateral menu clicking on the menu icon
			$lateral_menu_trigger.on('click', function(event){
				event.preventDefault();
				
				$lateral_menu_trigger.toggleClass('is-clicked');
				//$navigation.toggleClass('lateral-menu-is-open');
				//$content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
				//	$('body').toggleClass('overflow-hidden');
				//});
				$('#jx-lateral-nav').toggleClass('lateral-menu-is-open');
				
				//check if transitions are not supported - i.e. in IE9
				if($('html').hasClass('no-csstransitions')) {
					$('body').toggleClass('overflow-hidden');
				}
			});
		
			//close lateral menu clicking outside the menu itself
			$content_wrapper.on('click', function(event){
				if( !$(event.target).is('#jx-menu-trigger, #jx-menu-trigger span') ) {
					$lateral_menu_trigger.removeClass('is-clicked');
					$navigation.removeClass('lateral-menu-is-open');
					$content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						$('body').removeClass('overflow-hidden');
					});
					$('#jx-lateral-nav').removeClass('lateral-menu-is-open');
					//check if transitions are not supported
					if($('html').hasClass('no-csstransitions')) {
						$('body').removeClass('overflow-hidden');
					}
		
				}
			});
		
			//open (or close) submenu items in the lateral menu. Close all the other open submenu items.
			$('.item-has-children').children('a').on('click', function(event){
				event.preventDefault();
				$(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
			});

			//EOF Menu Style#3
			
			});
			
			
		}

	};

	Home.initialize();

})();