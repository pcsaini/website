(function($) {
    "use strict";

   
    /*----------------------------
        Partners-slider
    ------------------------------ */
    $("#partners-slider-id").owlCarousel();

    /*----------------------------
     	wow js active
    ------------------------------ */
    new WOW().init();

    /*----------------------------
        parallax
    ------------------------------ */
    $('.parallax-bg').scrolly({
        bgParallax: true
    });

    /*----------------------------
        scrollUp
    ------------------------------ */
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<span><i class="fa fa-angle-up"></i></span>' // Text for element
    });

    /*----------------------------
        mixItUp
    ------------------------------ */
    $('.protfolio-list').mixItUp();


    /*----------------------------
        counterUp
    ------------------------------ */
    $('.counter').counterUp({
        delay: 10,
        time: 10000
    });
    /*----------------------------
        partners-slider-id
    ------------------------------ */
    $("#partners-slider-id").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        responsive: true
    });
    /*----------------------------
        option-choose-me-list
    ------------------------------ */
    $(".option-choose-me-list").owlCarousel({
        items: 1,
        autoPlay: false,
        responsive: true,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1]
    });
    
    /*----------------------------
    	Testimonial Container
    ------------------------------ */
    $(".testimonial-container").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 1,
        transitionStyle: "backSlide",
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1]
    });

    /*----------------------------
    	Testimonial Container
    ------------------------------ */
    $(".brand-list").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        items: 6
    });

    /*----------------------------
    	lightbox
    ------------------------------ */
    lightbox.option({
        'resizeDuration': 500,
        'wrapAround': true,
        positionFromTop: 150,
    })

    /*--------------------------
    	jQuery smooth scroll
    ---------------------------- */
    $('li.smoot-menu a').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = '57';
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInSine');

        event.preventDefault();
    });

    /*--------------------------
    	jQuery scroll Nav
    ---------------------------- */
    var top_offset = $('.header-area').height() - 0; // get height of fixed navbar
    $('.primary-menu').onePageNav({
        scrollOffset: 57
    });

    $(".navbar-toggle").on('click', function() {
        $("body").addClass("mobil-menu-activted");
    });
    $("ul.nav.navbar-nav li a").on('click', function() {
        $(".navbar-collapse").removeClass("in");
    });


    /*------------------------------------------------
      TOP Menu Stick
     -------------------------------------------------- */
    var sticky_menu = $(".header-area");
    var pos = sticky_menu.position();
    if (sticky_menu.length) {
        var windowpos = sticky_menu.offset().top;
        $(window).on('scroll', function() {
            var windowpos = $(window).scrollTop();
            if (windowpos > pos.top) {
                sticky_menu.addClass("sticky");
            } else {
                sticky_menu.removeClass("sticky");
            }
        });
    }


    /*------------------------------------------------
      Typed Slide
     -------------------------------------------------- */
    $(function(){
        $("#typed").typed({
            stringsElement: $('#typed-strings'),
            loop: true,
            typeSpeed: 100,
            startDelay: 500,
            backSpeed: 0,
            backDelay: 3000,
        });
    });


    /*------------------------------------------------
      Preloader
     -------------------------------------------------- */
    $("#fakeloader").fakeLoader({
        timeToHide:2000,
        zIndex:"9999999999999",//Default zIndex
        spinner:"spinner2",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
        bgColor:"rgba(0,188,212,0.9)", //Hex, RGB or RGBA colors

    });

    
})(jQuery);