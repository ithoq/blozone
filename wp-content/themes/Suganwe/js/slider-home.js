(function ($) {
    "use strict";

//slider setting

$('.slider').bxSlider({
    mode: 'vertical',
    pager: false,
    auto: true,
    pause: 5000,
	useCSS: false,
    easing: 'jswing',
	adaptiveHeight: true,
    speed: 1500,
    controls: false
});

})(jQuery);