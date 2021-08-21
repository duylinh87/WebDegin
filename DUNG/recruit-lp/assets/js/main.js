jQuery(function($) {

    //js for the event click on the menu item
    const itemMenu = $("#navPages .navPages-item"),
          hasMenu = $("#main-header .container-header .navPages-container");
    itemMenu.each(function () {
        const link =  $(this).find(".navPages-action");
        link.click(function () {
            const dataLink = $(this).attr("data-menuscroll"),
                  dataDiv = $(".main-content > div"),
                  heightMenu = $("#main-header").height();
            if(dataLink){
                if(hasMenu.hasClass( "is-open" )){
                    $("#main-header .container-header .navPages-container").removeClass("is-open");
                }
                dataDiv.each(function () {
                    const dataBlocks = $(this).attr("data-block");
                    if(dataBlocks == dataLink){
                        $('html, body').animate({scrollTop: $(this).offset().top - heightMenu}, 'slow');
                    }
                });
            }

        });
    });

    //ScrollTop body
    $("#srcoll-top .btn-scroll").click(function () {
        $('html, body').animate({scrollTop: $('html, body').offset().top}, 'slow');
    });
    $(".footer-scroll .btn-scroll").click(function () {
        $('html, body').animate({scrollTop: $('html, body').offset().top}, 'slow');
    });

    // Scroll body
    $(window).scroll(function(){
        const st = $(window).scrollTop(),
              heightBody = $("body").height(),
              height60 = (heightBody/100)*60;
        if(st > height60){
            $("#srcoll-top").addClass("is-open");
        }else {
            $("#srcoll-top").removeClass("is-open");
        }
    });

    //js for the event click on the voice item
    const itemVoice = $(".block-voice .tabs-imagesView .col-item-voice");
    itemVoice.each(function () {
        const eventImage = $(this).find(".lp-image"),
              dataItem = $(this).attr("data-voice"),
              $this = $(this);
        eventImage.click(function () {
            const tabsContents = $(".block-voice .tabs-contents .col-item-description");
            tabsContents.each(function () {
                const dataDescription = $(this).attr("data-description");
                if(dataDescription == dataItem){
                    $(".block-voice .tabs-contents .col-item-description").removeClass("active");
                    itemVoice.removeClass("active");
                    $this.addClass("active");
                    $(this).addClass("active");
                }
            });
        });
    });

    //js for slider in mobile
    $(window).resize(function(){
        const width = $(window).width();
        if(width < 768 ){
            $('#recruit-lp .block-voice .tabs-imagesView .content-lp-voice').slick({
                infinite: true,
                slidesToShow: 1,
                hover: false,
                speed: 500,
                nextArrow: '<img class="img-icon slider-prev" src="./assets/images/recruitLp/RecruitLp_icon_nextSlider.png">',
                prevArrow: '<img class="img-icon slider-next" src="./assets/images/recruitLp/RecruitLp_icon_prevSlider.png">',
            });
        };

        //js for the event click on the slider button
        $(".content-lp-voice .img-icon.slick-arrow").click(function () {
            const a = $(this).parents(".content-lp-voice").find(".slick-list .col-item-voice");
            a.each(function () {
                const b = $(this).hasClass("slick-active");
                if(b){
                    const dataVoice = $(this).attr("data-voice"),
                        tabsContents = $("#recruit-lp .block-voice .tabs-contents .col-item-description");

                    tabsContents.each(function () {
                        const dataDescription = $(this).attr("data-description");
                        if(dataDescription == dataVoice){
                            $("#recruit-lp .block-voice .tabs-contents .col-item-description").removeClass("active");
                            $(this).addClass("active");
                        }
                    })
                }
            });
        });
    });

    const width = $(window).width();
    if(width < 768 ){
        $('#recruit-lp .block-voice .tabs-imagesView .content-lp-voice').slick({
            infinite: true,
            slidesToShow: 1,
            hover: false,
            speed: 500,
            nextArrow: '<img class="img-icon slider-prev" src="./assets/images/recruitLp/RecruitLp_icon_nextSlider.png">',
            prevArrow: '<img class="img-icon slider-next" src="./assets/images/recruitLp/RecruitLp_icon_prevSlider.png">',
        });

        //js for the event click on the slider button
        $(".content-lp-voice .img-icon.slick-arrow").click(function () {
            const a = $(this).parents(".content-lp-voice").find(".slick-list .col-item-voice");
            a.each(function () {
                const b = $(this).hasClass("slick-active");
                if(b){
                    const dataVoice = $(this).attr("data-voice"),
                        tabsContents = $("#recruit-lp .block-voice .tabs-contents .col-item-description");

                    tabsContents.each(function () {
                        const dataDescription = $(this).attr("data-description");
                        if(dataDescription == dataVoice){
                            $("#recruit-lp .block-voice .tabs-contents .col-item-description").removeClass("active");
                            $(this).addClass("active");
                        }
                    })
                }
            });
        });
    }

    //js for menu open event
    $("#main-header .container-header .toggle-menu .icon-toggle").click(function () {
        const has = $("#main-header .container-header .navPages-container");
        if(has.hasClass( "is-open" )){
            $("#main-header .container-header .navPages-container").removeClass("is-open");
        } else {
            $("#main-header .container-header .navPages-container").addClass("is-open");
        }
    });




});
