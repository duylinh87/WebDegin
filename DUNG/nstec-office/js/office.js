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

    //js scroll to block
    $('#office .tabs-content .item-action-tab').click(function(event) {
        event.preventDefault();
        $("#office .tabs-content .list-tabs-office .item-tab-office").removeClass("active");
        $("#office .office-details .block-office-content").removeClass("active");
        $("#office .item-tab-office-mobile").removeClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).addClass("active");
        $('#' + target).prev().addClass("active");
        $(this).parent().addClass("active");
        return target_offset;
    });

    $("#office .item-tab-office-mobile .item-action-tab").click(function (event) {
        event.preventDefault();
        $("#office .tabs-content .list-tabs-office .item-tab-office").removeClass("active");

        var urlClick = $(this).attr('href');
        $("#office .tabs-content .list-tabs-office .item-tab-office").each(function () {
            var href = $(this).find(".item-action-tab").attr('href');
            if(href == urlClick){
                $(this).addClass("active");
            }
        });

        $("#office .office-details .block-office-content").removeClass("active");
        var hasClass = $(this).parent().hasClass("active");
        if(hasClass){
            $(this).parent().removeClass("active");
            $(this).parent().next().removeClass("active");
        } else {
            $(this).parent().addClass("active");
            $(this).parent().next().addClass("active");
        }

    });

    $(window).on("resize", function(event){
        var checkWidth = $(this).width();

        if(checkWidth > 767){
            $("#office .tabs-content .list-tabs-office .item-tab-office").each(function () {
                if($(this).hasClass("active")){
                    var href = $(this).find(".item-action-tab").attr('href');
                    var dest = href.split('#');
                    var target = dest[1];
                    var target_offset = $('#' + target).addClass("active");
                    return target_offset;
                }
            });
        }
    });





});