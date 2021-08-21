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

    $('#service .item-action').click(function (event) {
        event.preventDefault();
        $("#service .item-tab-service .item-action").removeClass("active");
        $("#service .service-block").removeClass("active");
        $(this).toggleClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).toggleClass("active");
        var target_offset_a = $('#' + target);
        $('#service .item-action-toggle').removeClass("active");
        $(target_offset_a).prev().find(".item-action-toggle").addClass("active");
        return false;
    });

    $('#service .item-action-toggle').click(function (event) {
        event.preventDefault();
        $("#service .item-tab-service .item-action-toggle").removeClass("active");
        $(this).toggleClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).toggleClass("active");
        return false;
    });

    $('#service .bottom-toggle .item-action-bottom').click(function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).removeClass("active");
        $(this).parents(".service-block").prev().find(".item-action-toggle").removeClass("active");
        return target_offset;
    });

    $("#service .item-asked-questions .title").click(function () {
        $(this).next().slideToggle(200);
        $(this).toggleClass("active");
    });

    // $(window).resize(function() {
    //     if ($(window).width() > 767) {
    //         $("#service .tabs-service .item-tab-service").each(function () {
    //             var $class = $(this).find(".item-action");
    //             if($class.hasClass("active")){
    //                 var url = $class.attr('href');
    //                 var dest = url.split('#');
    //                 var target = dest[1];
    //                 var target_offset = $('#' + target).toggleClass("active");
    //             }
    //         });
    //     }
    // });

    window.addEventListener("resize", function() {
        if (window.matchMedia("(min-width: 768px)").matches) {
            $("#service .tabs-service .item-tab-service").each(function () {
                var $class = $(this).find(".item-action");
                if($class.hasClass("active")){
                    var url = $class.attr('href');
                    var dest = url.split('#');
                    var target = dest[1];
                    var target_offset = $('#' + target).addClass("active");
                }
            });

            $("#service .service-block").each(function () {

            });
        }
    })


});