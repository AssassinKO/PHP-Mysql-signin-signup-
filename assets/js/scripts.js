/*!
    * Start Bootstrap - SB Admin v6.0.0 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);


function background(key) {
    console.log(key);
    if(key == "dark") {
        $(".sb-sidenav-dark").css({"background-color": "#212529", "color": "#fff"});
        $(".nav .nav-link, .nav .nav-link .sb-nav-link-icon i").css({"color": "#fff"});
        $(".sb-sidenav-menu-heading").css({"color": "#929292"});
    } else {
        console.log(key);
        $(".sb-sidenav-dark").css({"background-color": "#f8f9fa", "color": "#212529"});
        $(".nav .nav-link, .nav .nav-link .sb-nav-link-icon i").css({"color": "#212529"});
        $(".sb-sidenav-menu-heading").css({"color": "#929292"});
    }
}