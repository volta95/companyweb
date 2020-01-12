


$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() < 50) {
            // hide nav
            $("#nav-bar").removeClass("nav-bar");
            $("#back-to-top").fadeOut()
        } else {
            // show nav
            $("#nav-bar").addClass("nav-bar");
            $("#back-to-top").fadeIn()
        }
    });

});

$(document).ready(function(){
    $(".service-slider").owlCarousel({
        loop:true,
        margin:3,

        autoplay:true,
        autoplayTimeout:4000,
        lazyLoad: true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    $("#customers-testimonials").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });

    $("#team-members").owlCarousel({
        items: 3,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        responsive:{
            600:{
                items:2
            },
            480:{
                    items:1
            },
            0:{
                items:1
            },
            321:{
                items:1
            },
            320:{
                items:1
            },
            800:{
                items:3
            }
        }
    });

});
      /*================================
            animation on scroll
    =================================*/
    $(function () {
        //animate on scroll
        new WOW().init();
    });

    /*=============================================
                  CLIENTS
==============================================*/
$(function () {
    $("#clients-list").owlCarousel({
        items: 6,
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        autoplayHoverPause: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 5
            },
            // breakpoint from 992 up
            992: {
                items: 6
            }
        }
    });
});
    /*====================================================
                            STATS
    ====================================================*/
    $(function () {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

    });



/*=============================================
                  NAVIGATION
==============================================*/
// Smooth scrolling
$(function () {
    $("a.smooth-scroll").click(function (event) {


        // get/return id like #about, #work, #team and etc
        let section = $(this).attr("href");

        $("html, body").animate({
            scrollTop: $(section).offset().top - 64
        }, 1250, "easeInOutExpo");
    })
});


