(function($) {
    "use strict";

    // Preloader (if the #preloader div exists)
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });

    // Initiate the wowjs animation library
    new WOW().init();

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Header scroll class
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
    }



    // Toggle nav menu
    $(document).on('click', '.nav-toggle', function(e) {
        $('.nav-menu').toggleClass('nav-menu-active');
        $('.nav-toggle').toggleClass('nav-toggle-active');
        $('.nav-toggle i').toggleClass('bx-x bx-menu');

    });

    // Toogle nav menu drop-down items
    $(document).on('click', '.nav-menu .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
    });





    // Smooth scroll for the navigation menu and links with .scrollto classes
    $(document).on('click', '.nav-menu a, .scrollto', function(e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            e.preventDefault();
            var target = $(this.hash);
            if (target.length) {

                var scrollto = target.offset().top;

                if ($(this).attr("href") == '#header') {
                    scrollto = 0;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                    $('.nav-menu').removeClass('nav-menu-active');
                    $('.nav-toggle').removeClass('nav-toggle-active');
                    $('.nav-toggle i').toggleClass('bx-x bx-menu');
                }
                return false;
            }
        }
    });


    // jQuery counterUp 
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    // Porfolio isotope and filter
    $(window).on('load', function() {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item'
        });
        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({ filter: $(this).data('filter') });
        });
    });

    // Intro carousel
    var introCarousel = $(".carousel");
    introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
        $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') + "')");
        $(this).children('.carousel-background').remove();
    });

    // $(".carousel").swipe({
    //     swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
    //         if (direction == 'left') $(this).carousel('next');
    //         if (direction == 'right') $(this).carousel('prev');
    //     },
    //     allowPageScroll: "vertical"
    // });
    introCarousel.on('slid.bs.carousel', function(e) {
        $(this).find('h2').addClass('animated fadeInDown');
        $(this).find('p').addClass('animated fadeInUp');
    });




})(jQuery);