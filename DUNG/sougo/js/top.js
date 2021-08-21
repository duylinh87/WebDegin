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

    //js scroll
    $('#top #block-main-visual .item-title-box .item-action').click(function(event) {
        event.preventDefault();
        $("#top #block-main-visual .content-code .box-editor").removeClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).addClass("active");
        return target_offset;
    });

    $(document).ready(function() {
        var vid = document.getElementById("video-banner");
        vid.play();
    });

    //js scroll to block
    $('#top .main-banner .scroll-down .action-scroll').click(function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).offset();
        var target_top = target_offset.top;
        $('html, body').animate({
            scrollTop: target_top
        }, 500, 'swing');
        return false;
    });


    // example01
    // ============================================
    var $example01 = "<style type=\"text/css\">\n" +
        "\t@import url('https://fonts.googleapis.com/css?family=Codystar:300&display=swap');\n" +
        "\n" +
        "\t.heading{\n" +
        "\t\tdisplay: flex;\n" +
        "\t\tflex-wrap: wrap;\n" +
        "\t\talign-items: center;\n" +
        "\t\tjustify-content: center;\n" +
        "\t\theight: 100%;\n" +
        "\t\tbackground-image: url('data:image/svg+xml,%3Csvg width=\"42\" height=\"44\" viewBox=\"0 0 42 44\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg id=\"Page-1\" fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg id=\"brick-wall\" fill=\"%239C92AC\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');\n" +
        "\t}\n" +
        "\n" +
        "\t.heading h1 {\n" +
        "        font-size: 70px;\n" +
        "        text-align: center;\n" +
        "        font-weight: 900;\n" +
        "        -webkit-animation: glow 2s ease-in-out infinite alternate;\n" +
        "        -moz-animation: glow 2s ease-in-out infinite alternate;\n" +
        "        animation: glow 2s ease-in-out infinite alternate;\n" +
        "        width: 100%;\n" +
        "        align-items: center;\n" +
        "        font-family: 'Codystar', cursive;\n" +
        "\n" +
        "    }\n" +
        "\n" +
        "    @-webkit-keyframes glow {\n" +
        "        from {\n" +
        "            color: #fff;\n" +
        "            text-shadow: 0 0 10px #00fff2, 0 0 20px #00fff2, 0 0 30px #00fff2, 0 0 40px #00fff2, 0 0 50px #00fff2, 0 0 60px #00fff2, 0 0 70px #00fff2, 0 0 90px #00fff2;\n" +
        "        }\n" +
        "\n" +
        "        to {\n" +
        "            color: gray;\n" +
        "            text-shadow: 0 0 20px #00fff2, 0 0 30px #00fff2, 0 0 40px #00fff2, 0 0 50px #00fff2, 0 0 60px #00fff2, 0 0 70px #00fff2, 0 0 80px #00fff2, 0 1 90px #00fff2;\n" +
        "        }\n" +
        "    }\n" +
        "</style>\n" +
        "\n" +
        "<div class=\"heading\">\n" +
        "    <h1>SOUGO CAREER<br/>GROUP</h1>\n" +
        "</div>";

    var editorhtml01 = CodeMirror(document.getElementById("box-html-01"), {
        value: $example01,
        lineNumbers: true,
        mode: "javascript",
        theme: "base16-dark"
    });
    $("#iframeResult-01").contents().find("html").html(editorhtml01.getValue());

    $(".list-animation.item-01 .content-code button.submit").click(function(){
        $(this).parents(".list-animation").find(".iframeResult").contents().find("html").html(editorhtml01.getValue());
    });

    // example02
    // ============================================
    var $example02 = "<style type=\"text/css\">\n" +
        "\n" +
        "@import url(\"https://fonts.googleapis.com/css?family=Luckiest+Guy\");\n" +
        "\n" +
        ".pure-text{\n" +
        "    -webkit-font-smoothing: antialiased;\n" +
        "    width: 100%;\n" +
        "    height: 100%;\n" +
        "    overflow: hidden;\n" +
        "    font-family: \"Luckiest Guy\", cursive;\n" +
        "    -webkit-font-smoothing: antialiased;\n" +
        "    display: flex;\n" +
        "    align-items: center;\n" +
        "}\n" +
        "\n" +
        ".heading {\n" +
        "    cursor: default;\n" +
        "    position: absolute;\n" +
        "    width: 100%;\n" +
        "    margin: auto;\n" +
        "    display: block;\n" +
        "    text-align: center;\n" +
        "}\n" +
        "\n" +
        ".heading span {\n" +
        "    position: relative;\n" +
        "    top: 20px;\n" +
        "    display: inline-block;\n" +
        "    -webkit-animation: bounce 0.3s ease infinite alternate;\n" +
        "    font-size: 100px;\n" +
        "    color: #fff;\n" +
        "    text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,\n" +
        "    0 5px 0 #ccc, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,\n" +
        "    0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(2) {\n" +
        "    -webkit-animation-delay: 0.1s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(3) {\n" +
        "    -webkit-animation-delay: 0.2s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(4) {\n" +
        "    -webkit-animation-delay: 0.3s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(5) {\n" +
        "    -webkit-animation-delay: 0.4s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(6) {\n" +
        "    -webkit-animation-delay: 0.5s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(7) {\n" +
        "    -webkit-animation-delay: 0.6s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(8) {\n" +
        "    -webkit-animation-delay: 0.1s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(9) {\n" +
        "    -webkit-animation-delay: 0.2s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(10) {\n" +
        "    -webkit-animation-delay: 0.3s;\n" +
        "}\n" +
        "\n" +
        ".heading span:nth-child(11) {\n" +
        "    -webkit-animation-delay: 0.4s;\n" +
        "}\n" +
        "\n" +
        "@-webkit-keyframes bounce {\n" +
        "    100% {\n" +
        "        top: -20px;\n" +
        "        text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,\n" +
        "        0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,\n" +
        "        0 50px 25px rgba(0, 0, 0, 0.2);\n" +
        "    }\n" +
        "}\n" +
        "</style>\n" +
        "\n" +
        "<div class=\"pure-text\">\n" +
        "\t<h1 class=\"heading\">\n" +
        "\t\t<span>s</span>\n" +
        "\t\t<span>o</span>\n" +
        "\t\t<span>u</span>\n" +
        "\t\t<span>g</span>\n" +
        "\t\t<span>o</span>\n" +
        "\t\t<br/>\n" +
        "\t\t<span>c</span>\n" +
        "\t\t<span>a</span>\n" +
        "\t\t<span>r</span>\n" +
        "\t\t<span>e</span>\n" +
        "\t\t<span>e</span>\n" +
        "\t\t<span>r</span>\n" +
        "\t</h1>\n" +
        "</div>";

    var editorhtml02 = CodeMirror(document.getElementById("box-html-02"), {
        value: $example02,
        lineNumbers: true,
        mode: "javascript",
        theme: "base16-dark"
    });
    $("#iframeResult-02").contents().find("html").html(editorhtml02.getValue());

    $(".list-animation.item-02 .content-code button.submit").click(function(){
        $(this).parents(".list-animation").find(".iframeResult").contents().find("html").html(editorhtml02.getValue());
    });


    // example03
    // ============================================
    var $example03 = "<style type=\"text/css\">\n" +
        "@import url('https://fonts.googleapis.com/css?family=Lato:300,400|Poppins:300,400,800&display=swap');\n" +
        "\t.box-animation {\n" +
        "\t\twidth: 250px;\n" +
        "\t\theight: 250px;\n" +
        "\t\tposition: relative;\n" +
        "\t\tdisplay: flex;\n" +
        "\t\tjustify-content: center;\n" +
        "\t\tflex-direction: column;\n" +
        "\t\tmargin: auto;\n" +
        "\t}\n" +
        "\n" +
        "\n" +
        "    .box-animation .role {\n" +
        "        width: 100%;\n" +
        "        position: relative;\n" +
        "        display: flex;\n" +
        "        align-items: center;\n" +
        "        height: 30px;\n" +
        "        margin-top: -10px;\n" +
        "\t}\n" +
        "\n" +
        "    .box-animation .block {\n" +
        "        width: 0%;\n" +
        "        height: inherit;\n" +
        "        background: #e91e63;\n" +
        "        position: absolute;\n" +
        "        animation: secBlock 2s cubic-bezier(.74, .06, .4, .92) forwards;\n" +
        "        animation-delay: 2s;\n" +
        "        display: flex;\n" +
        "    }\n" +
        "\n" +
        "    .box-animation p {\n" +
        "        animation: secFadeIn 2s forwards;\n" +
        "        animation-delay: 3.2s;\n" +
        "        opacity: 0;\n" +
        "        font-weight: 400;\n" +
        "        font-family: 'Lato';\n" +
        "        color: #ffffff;\n" +
        "        font-size: 12px;\n" +
        "        text-transform: uppercase;\n" +
        "        letter-spacing: 5px;\n" +
        "    }\n" +
        "\n" +
        "    .box-animation .title {\n" +
        "        width: 100%;\n" +
        "        position: relative;\n" +
        "        display: flex;\n" +
        "        align-items: center;\n" +
        "        height: 50px;\n" +
        "\n" +
        "\n" +
        "    }\n" +
        "\n" +
        "    .box-animation .block {\n" +
        "        width: 0%;\n" +
        "        height: inherit;\n" +
        "        background: #ffb510;\n" +
        "        position: absolute;\n" +
        "        animation: mainBlock 2s cubic-bezier(.74, .06, .4, .92) forwards;\n" +
        "        display: flex;\n" +
        "    }\n" +
        "\n" +
        "\n" +
        "    .box-animation h1 {\n" +
        "        font-family: 'Poppins';\n" +
        "        color: #fff;\n" +
        "        font-size: 32px;\n" +
        "        -webkit-animation: mainFadeIn 2s forwards;\n" +
        "        -o-animation: mainFadeIn 2s forwards;\n" +
        "        animation: mainFadeIn 2s forwards;\n" +
        "        animation-delay: 1.6s;\n" +
        "        opacity: 0;\n" +
        "        display: flex;\n" +
        "        align-items: baseline;\n" +
        "        position: relative;\n" +
        "\n" +
        "\n" +
        "    }\n" +
        "\n" +
        "    .box-animation h1 span {\n" +
        "        width: 0px;\n" +
        "        height: 0px;\n" +
        "        -webkit-border-radius: 50%;\n" +
        "        -moz-border-radius: 50%;\n" +
        "        border-radius: 50%;\n" +
        "\n" +
        "        background: #ffb510;\n" +
        "        -webkit-animation: load 0.6s cubic-bezier(.74, .06, .4, .92) forwards;\n" +
        "        animation: popIn 0.8s cubic-bezier(.74, .06, .4, .92) forwards;\n" +
        "        animation-delay: 2s;\n" +
        "        margin-left: 5px;\n" +
        "        margin-top: -10px;\n" +
        "        position: absolute;\n" +
        "        bottom: 13px;\n" +
        "        right: -12px;\n" +
        "\n" +
        "    }\n" +
        "\n" +
        "    @keyframes mainBlock {\n" +
        "        0% {\n" +
        "            width: 0%;\n" +
        "            left: 0;\n" +
        "\n" +
        "        }\n" +
        "        50% {\n" +
        "            width: 100%;\n" +
        "            left: 0;\n" +
        "\n" +
        "        }\n" +
        "        100% {\n" +
        "            width: 0;\n" +
        "            left: 100%;\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "    @keyframes secBlock {\n" +
        "        0% {\n" +
        "            width: 0%;\n" +
        "            left: 0;\n" +
        "\n" +
        "        }\n" +
        "        50% {\n" +
        "            width: 100%;\n" +
        "            left: 0;\n" +
        "\n" +
        "        }\n" +
        "        100% {\n" +
        "            width: 0;\n" +
        "            left: 100%;\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "    @keyframes mainFadeIn {\n" +
        "        0% {\n" +
        "            opacity: 0;\n" +
        "        }\n" +
        "        100% {\n" +
        "            opacity: 1;\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "\n" +
        "    @keyframes popIn {\n" +
        "        0% {\n" +
        "            width: 0px;\n" +
        "            height: 0px;\n" +
        "            background: #e9d856;\n" +
        "            border: 0px solid #ddd;\n" +
        "            opacity: 0;\n" +
        "        }\n" +
        "        50% {\n" +
        "            width: 10px;\n" +
        "            height: 10px;\n" +
        "            background: #e9d856;\n" +
        "            opacity: 1;\n" +
        "            bottom: 45px;\n" +
        "        }\n" +
        "        65% {\n" +
        "            width: 7px;\n" +
        "            height: 7px;\n" +
        "            bottom: 0px;\n" +
        "            width: 15px\n" +
        "        }\n" +
        "        80% {\n" +
        "            width: 10px;\n" +
        "            height: 10px;\n" +
        "            bottom: 20px\n" +
        "        }\n" +
        "        100% {\n" +
        "            width: 7px;\n" +
        "            height: 7px;\n" +
        "            background: #e9d856;\n" +
        "            border: 0px solid #222;\n" +
        "            bottom: 13px;\n" +
        "\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "    @keyframes secFadeIn {\n" +
        "        0% {\n" +
        "            opacity: 0;\n" +
        "        }\n" +
        "        100% {\n" +
        "            opacity: 0.5;\n" +
        "        }\n" +
        "    }\n" +
        "</style>\n" +
        "\n" +
        "<div class=\"box-animation\">\n" +
        "    <div class=\"title\">\n" +
        "        <span class=\"block\"></span>\n" +
        "        <h1>SOUGO CAREER<span></span></h1>\n" +
        "    </div>\n" +
        "    <div class=\"role\">\n" +
        "        <div class=\"block\"></div>\n" +
        "        <p>Web designer</p>\n" +
        "    </div>\n" +
        "</div>";

    var editorhtml03 = CodeMirror(document.getElementById("box-html-03"), {
        value: $example03,
        lineNumbers: true,
        mode: "javascript",
        theme: "base16-dark"
    });
    $("#iframeResult-03").contents().find("html").html(editorhtml03.getValue());

    $(".list-animation.item-03 .content-code button.submit").click(function(){
        $(this).parents(".list-animation").find(".iframeResult").contents().find("html").html(editorhtml03.getValue());
    });






    // editor css
    //===================================================
    // var $codecss = ".color-svg {\n" +
    //     "        text-align: center;\n" +
    //     "    }\n" +
    //     "\n" +
    //     "    .color-svg svg {\n" +
    //     "        width: 80%;\n" +
    //     "\n" +
    //     "    }\n" +
    //     "\n" +
    //     "    svg path {\n" +
    //     "        stroke: #00fff2;\n" +
    //     "    }";
    // var editorstyle01 = CodeMirror(document.getElementById("box-style"), {
    //     value: $codecss,
    //     lineNumbers: true,
    //     mode: "javascript",
    //     theme: "base16-dark"
    // });
    //
    // $("button.submit").click(function(){
    //     $("#iframeResult").contents().find("#dark-mode-custom-style").html(editorstyle01.getValue());
    // });
    //
    // setTimeout(function(){
    //     $("#iframeResult").contents().find("#dark-mode-custom-style").html(editorstyle01.getValue());
    // },100);

    // editorjs
    //===================================================
    // var $codejs = "h1{color:red}";
    // var editorstyle01 = CodeMirror(document.getElementById("box-style"), {
    //     value: $codejs,
    //     lineNumbers: true,
    //     mode: "javascript",
    //     theme: "base16-dark"
    // });
    //
    // $("#iframeResult").contents().find("#custom-js").html(editorstyle01.getValue());
    //
    // $("button.submit").click(function(){
    //     $("#iframeResult").contents().find("#custom-js").html(editorstyle01.getValue());
    // });



});