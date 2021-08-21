jQuery(function($) {
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

    //fadein
    $(window).on("load", function() {
        $(window).scroll(function() {
            $(".js-fadein").each(function() {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > ptop - windowHeight + 100) {
                    $(this).addClass("scroll-in");
                }
            });
        });

        $(".js-fadein").each(function() {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (firstView > ptop - windowHeight) {
                $(this).addClass("scroll-in");
            }
        });
    });

    //retina
    $(window).on("load resize", function() {
        function control_imgResize() {
            if (parseInt($(window).width()) < 768) {
                $(".retina-img").each(function() {
                    var objElement = $(this);
                    var objOmg = new Image();
                    objOmg.src = objElement.attr("src");
                    if (objOmg.width != 0) {
                        objElement.css({ width: objOmg.width / 2 });
                    }
                });
            } else {
                $(".retina-img").css("width", "");
            }
        }
        if (parseInt($(window).width()) < 768) {
            // $(document).ready(function() {
            //     var obj = $('.bxslider').bxSlider({ // 自動再生
            //         auto: true,
            //         infiniteLoop: true,
            //         responsive: true,
            //         speed: 1000,
            //         displaySlideQty: 1,
            //         pager: false,
            //         minSlides: 1,
            //         maxSlides: 1,
            //         moveSlides: 1,
            //         slideMargin: 30,
            //         pause: 6000,
            //         nextText: '<img class="img-icon" src="./images/office/office_ico_next.png">',
            //         prevText: '<img class="img-icon" src="./images/office/office_ico_prev.png">',
            //         onSlideAfter: function() { // 自動再生
            //             obj.startAuto();
            //         }
            //     });
            // });
        }
        control_imgResize();
        $(function() {
            var timer = false;
            $(window).resize(function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    $(".retina-img").removeAttr("style");
                    control_imgResize();
                }, 200);
            });
        });



    });

    //sp tel
    $(function() {
        if (!isMobile) {
            $('a[href^="tel:"]').on("click", function(e) {
                e.preventDefault();
            });
            $('a[href^="tel:"]').css({
                "pointer-events": "none",
                color: "#333333"
            });
            $('a[href^="tel:"]').hover(function() {
                $(this).css({
                    opacity: "1",
                    cursor: "default",
                    "text-decoration": "none"
                });
            });
        }
    });

    //switching image
    $(function() {
        var i = $(".switch-img"),
            t = "_pc",
            s = "_sp",
            a = 768;
        i.each(function() {
            function i() {
                var i = parseInt($(window).width());
                i >= a ?
                    c
                    .attr("src", c.data("img").replace(s, t))
                    .css({ visibility: "visible" }) :
                    c.attr("src", c.data("img")).css({ visibility: "visible" });
            }
            var c = $(this);
            $(window).resize(function() {
                    i();
                }),
                i();
        });
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


    $(function() {
        var slider;
        var sliderFlag = false;
        var breakpoint = 768;

        $(window).on('load resize', function() {
            sliderSet();
        });

        function sliderSet() {
            var windowWidth = $(window).width();
            if (windowWidth <= breakpoint && !sliderFlag) {
                slider = $('#office .office-list').bxSlider({
                    mode: "horizontal",
                    auto: true,
                    pause: 6000,
                    speed: 800,
                    autoHover: false,
                    responsive: true,
                    controls: true,
                    pager: false,
                    // stopAutoOnClick: true,
                    autoStart: true,
                    // minSlides:1,
                    // maxSlides:1,
                    // moveSlides:1,
                    useCSS: false,
                    nextText: '<img class="img-icon" src="./images/office/office_ico_next.png">',
                    prevText: '<img class="img-icon" src="./images/office/office_ico_prev.png">',
                });
                sliderFlag = false;
            } else if (windowWidth > breakpoint && sliderFlag) {
                slider.destroySlider();
                sliderFlag = true;
            }
        }
    });

    // $('#office .office-list').bxSlider({
    //     mode: "horizontal",
    //     auto: true,
    //     pause: 6000,
    //     speed: 800,
    //     autoHover: false,
    //     responsive: true,
    //     controls: true,
    //     pager: false,
    //     // stopAutoOnClick: true,
    //     autoStart: true,
    //     // minSlides:1,
    //     // maxSlides:1,
    //     // moveSlides:1,
    //     useCSS: false,
    //     nextText: '<img class="img-icon" src="./images/office/office_ico_next.png">',
    //     prevText: '<img class="img-icon" src="./images/office/office_ico_prev.png">',
    // });


    // var ImagePauses = [6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000,6000];
    //
    // var slider = $('.office-list').bxSlider();
    // modifyDelay(0);
    //
    // function modifyDelay(startSlide){
    //     slider.reloadSlider({
    //         mode: 'horizontal',
    //         auto: true,
    //         autoStart: true,
    //         autoDirection: 'next',
    //         autoHover: false,
    //         responsive: true,
    //         pause: ImagePauses[startSlide],
    //         autoControls: false,
    //         pager: false,
    //         pagerType: 'full',
    //         controls: true,
    //         speed: 800,
    //         useCSS: false,
    //         startSlide: startSlide,
    //         nextText: '<img class="img-icon" src="./images/office/office_ico_next.png">',
    //         prevText: '<img class="img-icon" src="./images/office/office_ico_prev.png">',
    //         onSlideAfter: function($el,oldIndex, newIndex){
    //             modifyDelay(newIndex);
    //         }
    //     });
    // }


    if ($("body div").hasClass("office-page")) {
        $("body").addClass("template-office");
    }

});