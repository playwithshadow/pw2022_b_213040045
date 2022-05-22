/*!
 * Start Bootstrap - Modern Business v5.0.6 (https://startbootstrap.com/template-overviews/modern-business)
 * Copyright 2013-2022 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Light Box
// $('.portfolio-item').isotope({
//  	itemSelector: '.item',
//  	layoutMode: 'fitRows'
//  });
$(".portfolio-menu ul li").click(function() {
    $(".portfolio-menu ul li").removeClass("active");
    $(this).addClass("active");

    var selector = $(this).attr("data-filter");
    $(".portfolio-item").isotope({
        filter: selector,
    });
    return false;
});
$(document).ready(function() {
    var popup_btn = $(".popup-btn");
    popup_btn.magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });
});