$(document).ready(function () {
    $("#bannerslider").owlCarousel({
        dots: true,
        nav: true,
        loop: true,
        autoplay: false,
        active: true,
        items: 1,
        autoplayTimeout: 7000,
        smartSpeed: 800,
    });

    $("#blog").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        items: 3,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },

            568: {
                items: 1
            },

            992: {
                items: 2
            },

            1199: {
                items: 3
            }
        }
    });
    $("#press-coverage,#brands-sec-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        items: 4,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },

            568: {
                items: 2
            },

            992: {
                items: 2
            },

            1199: {
                items: 4
            }
        }
    });
    $("#trending-product").owlCarousel({
        dots: false,
        nav: true,
        margin: 24,
        loop: false,
        autoplay: false,
        items: 4,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },

            568: {
                items: 2
            },

            992: {
                items: 2
            },

            1199: {
                items: 4
            }
        }
    });
    $("#testimonial-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        items: 1,
        autoHeight:true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
    });

    $("#legacy-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        items: 1,
        autoHeight:true,
        smartSpeed: 800,
        autoplaySpeed: 1500,
        center:true,
        margin:0,
        autoplayHoverPause: false
    });

    if ($(window).width() < 992) {
        $('.search-wrapper .input-group input').hide();
        $('.input-group-append button').click(function () {
            $('.search-wrapper .input-group input').toggle();
        });
    }

    $('.close-icon').click(function () {
        $('.navbar-collapse').removeClass('show')
    });

    //Tabbing//

    $(".trending-product .products .color-image a").click(function () {
        $(this).parents('.item').find('a').removeClass("active");
        $(this).parents('.item').find('.inner-image').removeClass("active");
        var activeTab = $(this).attr("data-href");
        $(this).addClass("active");
        $('.' + activeTab).addClass("active");
    });

    $('.js-accordion-title').click(function () {
        $(this).next().toggleClass('active');
        $(this).toggleClass('open');
    });

    // PDP Select Picker
    $('.pdp-select').selectpicker();

    // PDP Slider
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        infinite: true
    });
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        nav:true,
        focusOnSelect: true,
        infinite: true,
        vertical:true,
        verticalSwiping:true,
    });
});


