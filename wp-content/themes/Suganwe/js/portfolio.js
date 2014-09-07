(function ($) {
    "use strict";
	
//portfolio close button 
$('.close').click(function () {
    $('.worksajax').slideUp();
    return false;
});

//remove br in gallery
$(".gallery br").remove();
$(".worksajax .gallery-portfolio style").remove();
	
$('.gallery').bxSlider({
				mode: 'horizontal',
				pager: false,
				auto: true,
				pause: 8000,
				video: true,
				useCSS: true,
				adaptiveHeight: true,
				speed: 800,
				controls: true
			});
	
// portfolio Video responsive
        $(".worksajax").fitVids();
	
// script prettyphoto 
$(document).ready(function () {
    $("a[data-rel^='prettyPhoto'],.gallery-icon a").prettyPhoto({
        social_tools: false,
        deeplinking: false
    });
});

//easing portfolio scrolling
$(function () {
    $('.close').bind('click', function (event) {
        var $anchor = $('#portfolio');

        $('html, body').stop().animate({
            scrollTop: $($anchor).offset().top - 59
        }, 1000, 'linear');
        event.preventDefault();
    });
});

})(jQuery);