

//sticky navigation
$(document).ready(function () {
    $(".header").sticky({
        topSpacing: 0
    });
});


// Video responsive
$(".video").fitVids();



//twitter
jQuery(function ($) {
    $(".tweetfeed").tweet({
        username: "envato",
        modpath: 'twitter/',
        page: 1,
        count: 10,
        loading_text: "loading ..."
    })
});

// script prettyphoto
$(document).ready(function () {
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
        deeplinking: false
    });
});