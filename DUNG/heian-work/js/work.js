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
                if (scroll > ptop - windowHeight) {
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
                        if (scroll > ptop - windowHeight) {
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
            if (scroll > ptop - windowHeight) {
                $(this).addClass('fadeInUp');
            }
        });
    });

    $('.animatedFadeInUp').each(function () {
        var ptop = $(this).offset().top;
        var firstView = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (firstView > ptop - windowHeight) {
            $(this).addClass('fadeInUp');
        }
    });

    $("#work .tabs-content .list-tabs-work .item-tab-work .item-action").click(function(event) {
        event.preventDefault();

        $("#work .work-content .item-content-work").removeClass("active");
        $("#work .tabs-content .list-tabs-work .item-tab-work .item-action").removeClass("active");

        var url = $(this).attr('href'),
            dest = url.split('#'),
            target = dest[1],
            target_offset = $('#' + target).addClass("active");

        sliderFor = $('#' + target).find(".slider-for");
        sliderNav = $('#' + target).find(".slider-nav");

        $(this).addClass("active");

        $(sliderFor).slick({
            infinite: true,
            speed: 1000,
            autoplay: 2000,
            pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: sliderNav,
            nextArrow: '<span class="slick-next slick-arrow"><img class="img-icon" src="./images/work_ico_next.png"></span>',
            prevArrow: '<span class="slick-prev slick-arrow"><img class="img-icon" src="./images/work_ico_prev.png"></span>'
        });
        $(sliderNav).slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: sliderFor,
            dots: false,
            focusOnSelect: true
        });

    });


    $('#work01 .slider-for').slick({
        infinite: true,
        speed: 1000,
        autoplay: 2000, 
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#work01 .slider-nav',
        nextArrow: '<span class="slick-next slick-arrow"><img class="img-icon" src="./images/work_ico_next.png"></span>',
        prevArrow: '<span class="slick-prev slick-arrow"><img class="img-icon" src="./images/work_ico_prev.png"></span>'
    });
    $('#work01 .slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#work01 .slider-for',
        dots: false,
        focusOnSelect: true
    });

});