jQuery(function($) {

 

    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);
    console.log('sdfsafsdfffffffffffffffffff')
        //fadein
    $(window).on('load', function() {
        $(window).scroll(function() {
            $('.js-fadein').each(function() {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > ptop - windowHeight + 100) {
                    $(this).addClass('scroll-in');
                }
            });
        });

        $('.js-fadein').each(function() {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (firstView > ptop - windowHeight) {
                $(this).addClass('scroll-in');
            }
        });
    });

    //retina
    $(window).on('load resize', function() {
        function control_imgResize() {
            if (parseInt($(window).width()) < 768) {
                $('.retina-img').each(function() {
                    var objElement = $(this);
                    var objOmg = new Image();
                    objOmg.src = objElement.attr('src');
                    if (objOmg.width != 0) { objElement.css({ 'width': objOmg.width / 2 }); }
                });
            } else {
                $('.retina-img').css('width', '');
            }
        }
        control_imgResize();
        $(function() {
            var timer = false;
            $(window).resize(function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    $('.retina-img').removeAttr('style');
                    control_imgResize();
                }, 200);
            });
        });
    });

    //sp tel
    $(function() {
        if (!isMobile) {
            $('a[href^="tel:"]').on('click', function(e) {
                e.preventDefault();
            });
            $('a[href^="tel:"]').css({
                "pointer-events": "none",
                "color": "#333333"
            });
            $('a[href^="tel:"]').hover(function() {
                $(this).css({
                    "opacity": "1",
                    "cursor": "default",
                    "text-decoration": "none"
                });
            });
        }
    });
    //switching image
    $(function() {
        var i = $('.switch-img'),
            t = "_pc",
            s = "_sp",
            a = 768;
        i.each(function() {
            function i() {
                var i = parseInt($(window).width());
                i >= a ? c.attr('src',
                    c.data('img').replace(s, t)).css({ visibility: 'visible' }) : c.attr('src',
                    c.data('img')).css({ visibility: 'visible' })
            }
            var c = $(this);
            $(window).resize(function() { i() }), i()
        })
    });



    // $( '#message .link').click(function(){
    //      part = $(this).attr('href');
    //      console.log (part)
    //      position = $(part).offset().top;
    //      $("html, body").animate({ scrollTop: position}, 1000);
    // })


    $('#interview .box-content .title-page').addClass('js-fadein animated')
    $('#interview .box-content .title-img ').addClass('js-fadein animated')
    $('#interview .box-content .box-tour .item,#interview .box-content .box-check  ').addClass('js-fadein animated')
    $('#interview .box-content .box-step .item, #interview .box-content .box-tour .item, #interview .box-content .box-form .info-item,#interview .box-content .submbit .button_submit,#interview .box-content .link-page ').addClass('js-fadein animated')

    
});