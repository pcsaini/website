jQuery(window).load(function() {
    // will first fade out the loading animation
    jQuery("#status").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(1000).fadeOut("slow");
})

jQuery(document).ready(function($) {
    "use strict";

    //Sticky Navigation
    if ($('#header').length) {
        // grab the initial top offset of the navigation
        var stickyNavTop = $('#header').offset().top;
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function() {
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top
            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > stickyNavTop) {
                $('#header').addClass('cp_sticky');
            } else {
                $('#header').removeClass('cp_sticky');
            }
        };
        stickyNav();
        // and run it again every time you scroll
        $(window).scroll(function() {
            stickyNav();
        });
    }


    //Home Slider
   /* if ($('#home-slider').length) {
        $('#home-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }*/

    //Home Testimonials Slider
    if ($('#home-testimonials-slider').length) {
        $('#home-testimonials-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }
	
	//Countdown
/*	 if ($('.countdown').length) {
        $('.countdown').final_countdown({
            'start': 1362139200,
            'end': 1388461320,
            'now': 1387461319
        });
    }
*/
    
	 //Post Slider
    if ($('#post-slider').length) {
        $('#post-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }
	
	//Audio
	if ($('audio').length) {
	 $('audio').audioPlayer();
	}
	
	 //Tweets Slider
    if ($('#tweets-slider').length) {
        $('#tweets-slider').bxSlider({
            auto: true,
			mode: 'fade',
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }
 
	
	//Contact Map 1
   /* if ($('#map_contact_2').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10

            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_2'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //Set info window
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
	*/
	 //Location Slider
    if ($('#location-slider').length) {
        $('#location-slider').bxSlider({
            auto: true,
			mode: 'fade',
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

});
$('#customText dd').hide();


// ISOTOPE FILTER
jQuery(document).ready(function($){

    if ( $('.iso-box-wrapper').length > 0 ) {

        var $container  = $('.iso-box-wrapper'),
            $imgs     = $('.iso-box img');

        $container.imagesLoaded(function () {

            $container.isotope({
                layoutMode: 'fitRows',
                itemSelector: '.iso-box'
            });

            $imgs.load(function(){
                $container.isotope('reLayout');
            })

        });

        //filter items on button click

        $('.filter-wrapper li a').click(function(){

            var $this = $(this), filterValue = $this.attr('data-filter');

            $container.isotope({
                filter: filterValue,
                animationOptions: {
                    duration: 650,
                    easing: 'linear',
                    queue: false,
                }
            });

            // don't proceed if already selected

            if ( $this.hasClass('selected') ) {
                return false;
            }

            var filter_wrapper = $this.closest('.filter-wrapper');
            filter_wrapper.find('.selected').removeClass('selected');
            $this.addClass('selected');

            return false;
        });

    }

});

// for tab hidden //
$('.tab1').show();
$('.tab2').hide();
$('.tab3').hide();
$('.tab4').hide();
$('.tab5').hide();
$('.tab6').hide();
$('.tab7').hide();
$('.tab8').hide();
$('.tab9').hide();
$('.tab10').hide();


$(function(){
    // ------- WOW ANIMATED ------ //
    wow = new WOW(
        {
            mobile: false
        });
    wow.init();

    // NIVO LIGHTBOX
    $('.iso-box-section a').nivoLightbox({
        effect: 'fadeScale',
    });

});


//Event Highlight 
$('.highlights-number').each(function () {
    var $this = $(this);
    jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 7000,
        easing: 'swing',
        step: function () {
            $this.text(Math.ceil(this.Counter));
        }
    });
});


