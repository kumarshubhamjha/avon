$(document).ready(function () {
    $("#bannerslider").owlCarousel({
        dots: true,
        nav: true,
        loop: true,
        autoplay: true,
        active: true,
        items: 1,
        autoplayTimeout: 4000,
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
            767: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    $("#press-coverage,#brands-sec-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        items: 4,
        autoplayTimeout: 3500,
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
                items: 3
            },

            1199: {
                items: 4
            }
        }
    });

    $("#avon-sq-banner-slider").owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        autoplay: true,
        items: 4,
        margin: 30,
        autoplayTimeout: 2000,
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
                items: 3
            },

            1199: {
                items: 4
            }
        }
    });
    $("#trending-product,#pdp-slider").owlCarousel({
        dots: false,
        nav: true,
        margin: 24,
        loop: true,
        autoplay: true,
        autoHeight: true,
        items: 4,
        autoplayTimeout: 2500,
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
                items: 3
            },

            1199: {
                items: 4
            }
        }
    });

    $("#management-slider").owlCarousel({
        dots: false,
        nav: true,
        margin: 30,
        loop: true,
        autoplay: false,
        autoHeight: true,
        items: 3,
        autoplayTimeout: 2500,
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
                items: 3
            }
        }
    });

    $("#testimonial-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        items: 1,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
    });

    $("#legacy-slider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        items: 1,
        autoHeight: true,
        smartSpeed: 800,
        autoplaySpeed: 1500,
        center: true,
        margin: 0,
        autoplayHoverPause: false
    });

    $('header nav.navbar .nav .dropdown-menu').parent().addClass("arrowdropdown");

    if ($(window).width() < 992) {
        $('.search-wrapper .input-group input').hide();
        $('.input-group-append button').click(function () {
            $('.search-wrapper .input-group input').toggle();
        });
    }


    if ($(window).width() < 1020) {
        $('header .arrowdropdown .nav-link').after().click(function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).parent().find('.dropdown-menu').toggleClass('show');
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

    // PDP Slick Slider
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        infinite: false
    });
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        nav: true,
        focusOnSelect: true,
        infinite: false,
        vertical: true,
        verticalSwiping: true,
    });

    // PDP Owl Carousel
    $("#pdpGallerySlider").owlCarousel({
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        active: true,
        items: 1,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        autoplayHoverPause: true
    });

    // Choices Tab
    $('.choices #v-pills-tabContent').find('.tab-pane:first-child').addClass('active');
    $('.choices #v-pills-tabContent').find('.tab-pane:first-child').addClass('show');
    $('.choices #v-pills-tab').find('.nav-link:first-child').addClass('active');


    // Sticky Header
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $("header").addClass("sticky");
        } else {
            $("header").removeClass("sticky");
        }
    });

    $('.cart .icon').click(function () {
        $('.cart-wrapper').toggleClass('active');
    });

    $('.cart .close').click(function () {
        $('.cart-wrapper').removeClass('active');
    });

    $('.top-search .icon').click(function () {
        $('.search-wrapper').toggleClass('active');
    });

    $('.search-wrapper .close').click(function () {
        $('.search-wrapper').removeClass('active');
    });

    $(".trending-product .products .item").each(function () {
        var prodName = $(this).find('.product-name-rating .label');
        if ((prodName).length > 0) {
            $(this).find('.product-name-rating').addClass('hasLabel');
        }
    });

    $('.myaccount .icon').click(function () {
        $('.myaccount-popup').toggleClass('active');
    });

    // Main Banner Controls
    var control = $("<div class='controls'>");
    $('.main-banner .owl-carousel').append(control);
    $('.main-banner .controls').prepend($('.main-banner .owl-nav'));
    $('.main-banner .controls').append($('.main-banner .owl-dots'));

    $('.blog-listing .accordion-content a').click(function () {
        $('.blog-listing .accordion-content a').removeClass('active');
        $(this).addClass('active');
        var tagid = $(this).data('tag');
        $('.blog-listing .blog .items').removeClass('active');
        $('#' + tagid).addClass('active');
    });
    $('.faq-section ul li').click(function () {
        $('.faq-section ul li').removeClass('active');
        $(this).addClass('active')
    });

    $('.filter-accordion .accordion-content a').click(function () {
        $('.accordion-content a').removeClass('active');
        $(this).addClass('active');
        var tagid = $(this).data('tag');
        $('.items-wrapper .item').removeClass('active');
        $('#' + tagid).addClass('active');
    });

    $('#brandsFilter .accordion-content a').click(function () {
        $('.accordion-content a').removeClass('active');
        $(this).addClass('active');
        var tagid = $(this).data('tag');
        $('.items-wrapper .items').removeClass('active');
        $('#' + tagid).addClass('active');
    });


    // Product Page type types toggle
    $('.prod-detail').find('li.item:first-child').addClass('selected');
    $('.prod-detail').find('li.item').click(function () {
        $(this).parent('ul').find('li.item').removeClass('selected');
        $(this).addClass('selected');
        $('.total').find('span').remove();
        var sum = 0;
        $('li.item.selected input').each(function () {
            sum += parseInt($(this).attr('price'));
        });
        let price = parseInt($('.new-price').attr('price'));
        let costPrice = parseInt($('.old-price').attr('price'));
        $(".new-price").text(sum + price + '₹');
        $(".old-price").text(sum + costPrice + '₹');
    });


    // Checkout Page Next Button
    $('.checkout-wrapper #sc_button-form-process').attr('disabled', true);
    $('.checkout-wrapper .continue-btn').click(function (e) {
        e.preventDefault();
        var navLink = $(this);

        $("input.required").each(function (e) {
            var inputBox = $(this).val();
            if (inputBox == '') {
                $('li.payment').removeClass('active');
                $('li.address').addClass('active');
                $('.checkout-wrapper #payment-sec').removeClass('active');
                $('.checkout-wrapper #address').addClass('active');
                $(this).addClass('error');
                return false;
            } else {
                $('li.address').removeClass('active');
                $('li.payment').addClass('active');
                $('.checkout-wrapper #payment-sec').addClass('active');
                $('.checkout-wrapper #address').removeClass('active');
                $(this).removeClass('error');
                $('.checkout-wrapper #sc_button-form-process').attr('disabled', false);
                return true;
            }
        });
    });

    // Checkout Page Back Button
    $('.checkout-wrapper .back-btn').click(function () {
        $('#sc_button-form-process').attr('disabled', true);
        $('li.payment').removeClass('active');
        $('li.address').addClass('active');
        $('.checkout-wrapper #payment-sec').removeClass('active');
        $('.checkout-wrapper #address').addClass('active');
    });


    // Quantity Increment for Product Page
    var incrementPlus;
    var incrementMinus;
    var buttonPlus = $(".cart-qty-plus");
    var buttonMinus = $(".cart-qty-minus");

    var incrementPlus = buttonPlus.click(function () {
        var $n = $(this).parent(".product-stepper").find("input");
        $n.val(Number($n.val()) + 1);
    });

    var incrementMinus = buttonMinus.click(function () {
        console.log('minus');
        var $n = $(this).parent(".product-stepper").find("input");
        var amount = Number($n.val());
        if (amount > 1) {
            $n.val(amount - 1);
        }
    });

    // Product page Review Rating
    $('.ratingStars input').on('change', function () {
        $('input[name=point]').removeClass('active');
        var value = $('input[name=point]:checked').val();
        for (var i = 0; i < value; i++) {
            $('.ratingStars input[name=point]').eq(i).addClass('active');
        }
    });

    $('#writeReview').click(function () {
        $('#reviewForm').toggleClass('active')
    });

    // Listing Page

    $('.product-accordian .product-inputs input').click(function () {
        let filterValue = $(this).next('label').text();
        let filterValues = $(this).attr('name');
        if ($(this).prop("checked") == true) {
            $(".searching-input").prepend(` <div class="serach-tags" id="${filterValues}">${filterValue}<span>X</span></div>`);
            $('.searching-input .serach-tags span').click(function () {
                $(this).parent().remove();
            })
        } else {
            $('.searching-input .serach-tags').remove(`#${filterValues}`)
        }
        $('.searching-input .serach-tags span').click(function () {
            let filterValueSide = $(this).parent().attr('id')
            $(this).parent().remove();
            $(`.product-accordian .product-inputs #${filterValueSide}`).prop('checked', false)
        })
    })



    $('#listingAccordion input').click(function () {
        let filterValue = $(this).next('label').text();
        let filterValues = $(this).attr('name');

        if ($(this).prop("checked") == true) {
            $('#listingAccordion input').removeClass('active');
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    })
});