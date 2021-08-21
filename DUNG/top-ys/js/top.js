jQuery(function($) {

    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

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

    //scroll
    $(function () {
        $('.scroll').click(function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');
            var target = dest[1];
            var target_offset = $('#' + target).offset();
            var target_top = target_offset.top;
            $('html, body').animate({scrollTop: target_top}, 500, 'swing');
            return false;
        });
    });

    $(window).scrollTop($(window).scrollTop()+1);


    $(function () {

        //slider mainimg
        var slider01 = $('#top .list-mainImg');
        var bxslider01 = slider01.bxSlider({
            mode: 'fade',
            auto: true,
            pause: 5000,
            speed: 800,
            infiniteLoop: true,
            nextText: '<img class="icon-slider" src="./images/top/top_icon_nextSlider_main_pc.png" alt="">',
            prevText: '<img class="icon-slider" src="./images/top/top_icon_prevSlider_main_pc.png" alt="">',
            onSlideAfter: function () {
                bxslider01.stopAuto();
                bxslider01.startAuto();
            }
        });


        // slider new jobs
        var slider02 = $('#top .list-slider-newJobs');
        var windowWidth = $("#top .new-jobs-block .slider-newJobs").width();
        var width = windowWidth / 3 - 34;
        var minSlides;
        var maxSlides;

        if ($(window).width() > 767) {
            minSlides = 3;
            maxSlides = 3;
        } else {
            minSlides = 1;
            maxSlides = 1;
        }

        window.addEventListener("resize", function () {
            if (window.matchMedia("(min-width: 768px)").matches) {
                minSlides = 3;
                maxSlides = 3;
            } else {
                minSlides = 1;
                maxSlides = 1;
            }
            ;
        });

        var bxslider02 = slider02.bxSlider({
            slideWidth: width,
            minSlides: minSlides,
            maxSlides: maxSlides,
            moveSlides: 1,
            pager: false,
            auto: true,
            pause: 5000,
            speed: 800,
            infiniteLoop: true,
            nextText: '<img class="icon-slider switch-img retina-img" src="./images/top/top_ico_next_slider_newJobs_pc.png" alt="">',
            prevText: '<img class="icon-slider switch-img retina-img" src="./images/top/top_ico_prev_slider_newJobs_pc.png" alt="">',
            onSlideAfter: function () {
                bxslider02.stopAuto();
                bxslider02.startAuto();
                if (window.matchMedia("(min-width: 768px)").matches) {
                    var widthtResize = slider02.parents(".slider-newJobs").width();
                    var widthtItem = widthtResize / 3 - 34;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem);
                } else {
                    var widthtResize02 = slider02.parents(".slider-newJobs").width();
                    var widthtItem02 = widthtResize02 - 60;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem02);
                }
            },
            onSliderResize: function () {
                if (window.matchMedia("(min-width: 768px)").matches) {
                    var widthtResize = slider02.parents(".slider-newJobs").width();
                    var widthtItem = widthtResize / 3 - 34;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem);
                } else {
                    var widthtResize02 = slider02.parents(".slider-newJobs").width();
                    var widthtItem02 = widthtResize02 - 60;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem02);
                }

            },
            onSliderLoad: function () {
                if (window.matchMedia("(min-width: 768px)").matches) {
                    var widthtResize = slider02.parents(".slider-newJobs").width();
                    var widthtItem = widthtResize / 3 - 34;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem);
                } else {
                    var widthtResize02 = slider02.parents(".slider-newJobs").width();
                    var widthtItem02 = widthtResize02 - 60;
                    slider02.find(".item-slider-newJobs").css("width", widthtItem02);
                }
            },
        });

    });

});