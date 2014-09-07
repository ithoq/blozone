(function ($) {
    "use strict";

    //about carousel add active class
    $('#about-slide .carousel-inner .item:first').addClass('active');



    //testimonial carousel setting
    $("#testimonial-slide").list_ticker({
        speed: 5000,
        effect: 'fade'
    })

    //sticky navigation
    $(document).ready(function () {
        $(".header").sticky({
            topSpacing: 0
        });
    });

    //Page scrolling
    $(document).ready(function () {
        $('.navigation').onePageNav({
            filter: ':not(.external a)',
            scrollThreshold: 0.25,
            scrollOffset: 60
        });

    });


    //easing scrolling
    $(function () {
        $('.move-to').bind('click', function (event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 59
            }, 500, 'linear');
            /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
            event.preventDefault();
        });
    });


    // Video responsive
    $(".container").fitVids();

    //script team
    $(document).ready(function () {
        $(".team-inner").click(function (e) {
            if ($(this).hasClass("scroll")) {
                $(this).removeClass("scroll");
            } else {
                $(".team-inner").removeClass("scroll");
                $(this).addClass("scroll");
            }
        });
    });


    //isotope setting
    var $container = $('.portfolio-body');

    $container.imagesLoaded(function () {
        $container.isotope({});
    });

    // filter items when filter link is clicked
    $('.port-filter a').click(function () {
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });
	
	// filtrer apremont au chargement de la page
	$(document).ready(function () {
		var $container = $('.portfolio-body');
		$container.imagesLoaded(function () {
			$container.isotope({});
		});
        $container.isotope({
            filter: ".apremont"
        });
        return false;
    });



    //portfolio scrolling
    $(function () {
        $('.port-item a').bind('click', function (event) {
            var $anchor = $('#workslist');

            $('html, body').stop().animate({
                scrollTop: $($anchor).offset().top - 59
            }, 1000, 'linear');
            event.preventDefault();
        });
    });



    // script prettyphoto
    $(document).ready(function () {
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            social_tools: false,
            deeplinking: false
        });
    });


    //menu collapse
    $(document).on('click', function () {
        $('.menu .collapse').collapse('hide');
    })


})(jQuery);