jQuery(function($) {

    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

    //fadein
    $(window).on('load', function () {
        $(window).scroll(function () {
            $('.js-fadein').each(function () {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > ptop - windowHeight + 100) {
                    $(this).addClass('scroll-in');
                }
            });
        });

        $('.js-fadein').each(function () {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (firstView > ptop - windowHeight) {
                $(this).addClass('scroll-in');
            }
        });
    });

    //retina
    $(window).on('load resize', function () {
        function control_imgResize() {
            if (parseInt($(window).width()) < 768) {
                $('.retina-img').each(function () {
                    var objElement = $(this);
                    var objOmg = new Image();
                    objOmg.src = objElement.attr('src');
                    if (objOmg.width != 0) {
                        objElement.css({'width': objOmg.width / 2});
                    }
                });

                $(window).scroll(function () {
                    $('.animatedFadeInUp').each(function () {
                        var ptop = $(this).offset().top;
                        var scroll = $(window).scrollTop();
                        var windowHeight = $(window).height();
                        if (scroll > ptop - windowHeight - 50) {
                            $(this).addClass('fadeInUp');
                        }
                    });
                });
            } else {
                $('.retina-img').css('width', '');
            }
        }

        control_imgResize();
        $(function () {
            var timer = false;
            $(window).resize(function () {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function () {
                    $('.retina-img').removeAttr('style');
                    control_imgResize();
                }, 200);
            });
        });
    });

    //sp tel
    $(function () {
        if (!isMobile) {
            $('a[href^="tel:"]').on('click', function (e) {
                e.preventDefault();
            });
            $('a[href^="tel:"]').css({
                "pointer-events": "none",
                "color": "#333333"
            });
            $('a[href^="tel:"]').hover(function () {
                $(this).css({
                    "opacity": "1",
                    "cursor": "default",
                    "text-decoration": "none"
                });
            });
        }
    });


    //switching image
    $(function () {
        var i = $('.switch-img'), t = "_pc", s = "_sp", a = 768;
        i.each(function () {
            function i() {
                var i = parseInt($(window).width());
                i >= a ? c.attr('src', c.data('img').replace(s, t)).css({visibility: 'visible'}) : c.attr('src', c.data('img')).css({visibility: 'visible'})
            }

            var c = $(this);
            $(window).resize(function () {
                i()
            }), i()
        })
    });

    // js fadeIn Up
    $(window).scroll(function () {
        $('.animatedFadeInUp').each(function () {
            var ptop = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > ptop - windowHeight + 150) {
                $(this).addClass('fadeInUp');
            }
        });
    });

    $('.animatedFadeInUp').each(function () {
        var ptop = $(this).offset().top;
        var firstView = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (firstView > ptop - windowHeight + 150) {
            $(this).addClass('fadeInUp');
        }
    });

    $('head').append('<meta name="viewport" content="width=device-width,minimum-scale=0.5">');

    if ($("body div").hasClass("topPage")) {
        $("body").addClass("template-top");
    }

    // js marker animation
    $(window).scroll(function (){
        $(".marker-animation").each(function(){
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight){
                $(this).addClass('active');
            }
        });
    });

    // js slider Top
    $('#top .main-sliderTop .content-slider').slick({
        dots: false,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        autoplay: true,
        swipe: false,
        autoplaySpeed: 1000,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });

    $(window).bind("load", function() {
        $("#top .main-sliderTop").addClass("is-loading");
    });

    //js slider about us
    $('#top .about-us-block .list-slider-aboutUs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipe: false,
        dots: false,
        speed: 500,
        nextArrow: '<span class="button slick-next"><img class="img-icon" src="./images/top_icon_next_slider.png"></span>',
        prevArrow: '<span class="button slick-prev"><img class="img-icon" src="./images/top_icon_prev_slider.png"></span>',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 551,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    // js click form search function
    $("#top .search-jobs-block .item-search-tab").click(function () {
        $("#top .search-jobs-block .item-search-tab").removeClass("is-active");
        $(this).addClass("is-active");
    })

    //js slider pickUp jobs
    $('#top .pickUp-jobs-block .list-pickUp-jobs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipe: false,
        dots: false,
        speed: 500,
        nextArrow: '<span class="button slick-next"><img class="img-icon" src="./images/top_icon_next_slider_pickUp.png"></span>',
        prevArrow: '<span class="button slick-prev"><img class="img-icon" src="./images/top_icon_prev_slider_pickUp.png"></span>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 551,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

});