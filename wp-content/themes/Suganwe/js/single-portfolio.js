(function ($) {
    "use strict";
    //remove br in gallery
    $(".gallery br").remove();
    $(".gallery-portfolio style").remove();

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
    // script prettyphoto 
    $(document).ready(function () {
        $(".gallery-icon a").prettyPhoto({
            social_tools: false,
            deeplinking: false
        });
    });
})(jQuery);