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

    $('head').append('<meta name="viewport" content="width=device-width,minimum-scale=0.5">');

    if ($("body div").hasClass("devicePage")) {
        $("body").addClass("template-device");
    }

    $("#device .device-listBox-item").click(function () {
        var description = $(this).find(".content-popup").html();
        $("#device .device-modal-popup .inner_wrap").remove();
        $(description).appendTo("#device .device-modal-popup .device-description-popup");
        $("#device .device-modal-popup").addClass("is-open");
        $("#device .device-modal-popup").css({"opacity":"1", "pointer-events":"auto"});
    });

    $("#device .device-modal-popup .mask").click(function () {
        $(this).parents(".device-modal-popup").removeClass("is-open");
        $("#device .device-modal-popup").css({"opacity":"0", "pointer-events":"none"});
    });

    $("#device .device-modal-popup .close-popup").click(function () {
        $(this).parents(".device-modal-popup").removeClass("is-open");
        $("#device .device-modal-popup").css({"opacity":"0", "pointer-events":"none"});
    })

});