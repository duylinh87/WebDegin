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

    if ($("body div").hasClass("towaPage")) {
        $("html").addClass("template-towa");
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
        cssEase: 'linear',
    });

    $("#top .main-sliderTop").addClass("is-loading");

    // js play video
    $("#top .movie-block .content-video .play-video").click(function(){
        $("#top .movie-block .content-video").addClass("is-open");
        var symbol = $("#videoHome")[0].src.indexOf("?") > -1 ? "&" : "?";
        $("#videoHome")[0].src += symbol + "autoplay=1";
    });

    // js open menu mobile
    $("#header .toggle_menu").click(function () {
        $("#header #main-menu").slideToggle();
        $("body").toggleClass("is-open");
    });

    //ScrollTop body

    $(window).scroll(function(){
        const st = $(window).scrollTop(),
            heightBody = $("body").height(),
            height50 = (heightBody/100)*50;
        if(st > height50){
            $("#backTop-towa").addClass("is-open");
        }else {
            $("#backTop-towa").removeClass("is-open");
        }
    });

    $("#backTop-towa .img_backTop").click(function () {
        $('html, body').animate({scrollTop: $('html, body').offset().top}, 'slow');
    });

});