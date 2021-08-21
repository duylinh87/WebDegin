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


    //retina
    $(window).on('load resize', function () {
        function control_imgResize02() {
            if (parseInt($(window).width()) < 1280) {
                $('.retina-img02').each(function () {
                    var objElement = $(this);
                    var objOmg = new Image();
                    objOmg.src = objElement.attr('src');
                    if (objOmg.width != 0) {
                        objElement.css({'width': objOmg.width / 2});
                    }
                });
            } else {
                $('.retina-img02').css('width', '');
            }
        }

        control_imgResize02();
        $(function () {
            var timer = false;
            $(window).resize(function () {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function () {
                    $('.retina-img02').removeAttr('style');
                    control_imgResize02();
                }, 200);
            });
        });
    });

    //switching image 02
    $(function () {
        var i = $('.switchImg2'), t = "_pc", s = "_sp", a = 1280;
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


    var chart01 = false;
    var chart02 = false;
    var numberUp01 = false;
    var lengthnumberUp = false;
    $(window).scroll(function () {
        $('.anime-chart01').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight) {
                if (!chart01) {
                    chart01 = true;
                    animaChart01();
                    animaChart02();
                }
            }
        });

        $('.anime-chart02').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight) {
                if (!chart02) {
                    chart02 = true;
                    animaChart02();
                }
            }
        });

        $('.number-up01').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight) {
                if (!numberUp01) {
                    numberUp01 = true;
                    animaNumberUp01();
                }
            }
        });

        $('.column-chart').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight) {
                $(this).addClass("column-chart-active")
                if (!lengthnumberUp) {
                    lengthnumberUp = true;
                    lengthNumber01();
                    ageNumber01();
                }
            }
        });

    });

    function animaChart01() {
        var chart = new CanvasJS.Chart("chart01", {
            animationEnabled: true,
            legend: {
                cursor: "pointer",
                itemclick: explodePie
            },
            data: [{
                type: "pie",
                toolTipContent: "{name}: <strong>{y}%</strong>",
                indexLabel: "{name}",
                indexLabelFontColor: "#fff",
                showInLegend: false,
                startAngle: -90,
                dataPoints: [
                    {y: 72, name: "男性", color: "#29a7e1"},
                    {y: 28, name: "女性", color: "#e20002", exploded: true},
                ]
            }]
        });
        // thuộc tính exploded để tách luôn phần tử ra khi load 
        chart.render();

        function explodePie(e) {
            if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            } else {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            }
            // e.chart.render();
        }
    };

    function animaChart02() {
        var chart = new CanvasJS.Chart("chart02", {
            animationEnabled: true,
            legend: {
                cursor: "pointer",
                itemclick: explodePie
            },
            data: [{
                type: "pie",
                toolTipContent: "{name}: <strong>{y}%</strong>",
        
                showInLegend: false,
                startAngle: -90,
                dataPoints: [
                    {y: 67, name: "男性", color: "#29a7e1", exploded: true},
                    {y: 20, name: "女性", color: "#e20002"},
                    {y: 9, name: "男性", color: "#c7c8c9"},
                    {y: 3, name: "女性", color: "#dca0a0"},
                    {y: 1, name: "男性", color: "#727374"},
                ]
            }]
        });
        chart.render();

        function explodePie(e) {
            if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            } else {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            }
            // e.chart.render();
        }
    };


    function animaNumberUp01() {
        var $el = $("#age"),
            value = 42.5;
        $({percentage: 0}).stop(true).animate({percentage: value}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el.text(percentageVal);
            }
        }).promise().done(function () {
            $el.text(value);
        });
    };

    function lengthNumber01() {
        var $el = $(".length-service-number01"),
            value = 9;
        $({percentage: 0}).stop(true).animate({percentage: value}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el.text(percentageVal);
            }
        }).promise().done(function () {
            $el.text(value);
        });

        var $el2 = $(".length-service-number02"),
            value2 = 23;
        $({percentage: 0}).stop(true).animate({percentage: value2}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el2.text(percentageVal);
            }
        }).promise().done(function () {
            $el2.text(value2);
        });

        var $el3 = $(".length-service-number03"),
            value3 = 19;
        $({percentage: 0}).stop(true).animate({percentage: value3}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el3.text(percentageVal);
            }
        }).promise().done(function () {
            $el3.text(value3);
        });

        var $el4 = $(".length-service-number04"),
            value4 = 26;
        $({percentage: 0}).stop(true).animate({percentage: value4}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el4.text(percentageVal);
            }
        }).promise().done(function () {
            $el4.text(value4);
        });

        var $el5 = $(".length-service-number05"),
            value5 = 8;
        $({percentage: 0}).stop(true).animate({percentage: value5}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el5.text(percentageVal);
            }
        }).promise().done(function () {
            $el5.text(value5);
        });

        var $el6 = $(".length-service-number06"),
            value6 = 14;
        $({percentage: 0}).stop(true).animate({percentage: value6}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage * 10) / 10;
                $el6.text(percentageVal);
            }
        }).promise().done(function () {
            $el6.text(value6);
        });

    };

    function ageNumber01() {
        var $el = $(".ttl-ageGroup-number01"),
            value = 3;
        $({percentage: 0}).stop(true).animate({percentage: value}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el.text(percentageVal);
            }
        }).promise().done(function () {
            $el.text(value);
        });

        var $el2 = $(".ttl-ageGroup-number02"),
            value2 = 20;
        $({percentage: 0}).stop(true).animate({percentage: value2}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el2.text(percentageVal);
            }
        }).promise().done(function () {
            $el2.text(value2);
        });

        var $el3 = $(".ttl-ageGroup-number03"),
            value3 = 24;
        $({percentage: 0}).stop(true).animate({percentage: value3}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el3.text(percentageVal);
            }
        }).promise().done(function () {
            $el3.text(value3);
        });

        var $el4 = $(".ttl-ageGroup-number04"),
            value4 = 21;
        $({percentage: 0}).stop(true).animate({percentage: value4}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el4.text(percentageVal);
            }
        }).promise().done(function () {
            $el4.text(value4);
        });

        var $el5 = $(".ttl-ageGroup-number05"),
            value5 = 16;
        $({percentage: 0}).stop(true).animate({percentage: value5}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el5.text(percentageVal);
            }
        }).promise().done(function () {
            $el5.text(value5);
        });

        var $el6 = $(".ttl-ageGroup-number06"),
            value6 = 18;
        $({percentage: 0}).stop(true).animate({percentage: value6}, {
            duration: 2000,
            step: function () {
                var percentageVal = Math.round(this.percentage);
                $el6.text(percentageVal);
            }
        }).promise().done(function () {
            $el6.text(value6);
        });

    };





});