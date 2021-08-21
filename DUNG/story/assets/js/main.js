jQuery(function($) {

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
    //ScrollTop body
    $("#srcoll-top .btn-scroll").click(function () {
        $('html, body').animate({scrollTop: $('html, body').offset().top}, 'slow');
    });

    $("#story-page #tabs-title .tab-reviews").click(function () {
        $("#story-page #tabs-title .tab-reviews").removeClass("active");
        $(this).addClass("active");

        const dataTab = $(this).attr("data-tab"),
            itemContent = $("#story-page #tabs-contents .tab-content"),
            itemMembers = $("#story-page .other-members .col-other-members");

        itemContent.each(function () {
            const dataContent = $(this).attr("data-content");
            if(dataContent == dataTab){
                $("#story-page #tabs-contents .tab-content").removeClass("active");
                $(this).addClass("active");
            }
        });

        itemMembers.each(function () {
            const dataMember = $(this).attr("data-members");
            if(dataMember == dataTab){
                $("#story-page .other-members .col-other-members").removeClass("active");
                $(this).addClass("active");
            }
        });
    });

    //js check other member
    const a = $("#story-page #tabs-title .tab-reviews");
    a.each(function () {
        const $this = $(this);
        if($this.hasClass("active")){
            const b = $this.attr("data-tab"),
                  c = $("#story-page .other-members .col-other-members");
            c.each(function () {
                const dataMember = $(this).attr("data-members");
                if(dataMember == b){
                    $("#story-page .other-members .col-other-members").removeClass("active");
                    $(this).addClass("active");
                }
            })
        }
    });

    //js check content
    const checkTab = $("#story-page #tabs-title .tab-reviews");
    checkTab.each(function () {
        const $this = $(this);
        if($this.hasClass("active")){
            const b = $this.attr("data-tab"),
                c = $("#story-page #tabs-contents .tab-content");
            c.each(function () {
                const dataMember = $(this).attr("data-content");
                if(dataMember == b){
                    $("#story-page #tabs-contents .tab-content").removeClass("active");
                    $(this).addClass("active");
                }
            })
        }
    });

    //js check other member
    const checkReview = $("#story-page #tabs-title .tab-reviews");
    checkReview.each(function () {
        const $this = $(this);
        if($this.hasClass("active")){
            const b = $this.attr("data-tab"),
                c = $("#story-page .other-members .col-other-members");
            c.each(function () {
                const dataMember = $(this).attr("data-members");
                if(dataMember == b){
                    $("#story-page .other-members .col-other-members").removeClass("active");
                    $(this).addClass("active");
                }
            })
        }
    });

    // function onSize(width) {
    //     if (width.matches) {
    //         const itemTab = $("#story-page #tabs-contents .tab-content");
    //         itemTab.each(function () {
    //             const $this = $(this);
    //             if($this.hasClass("active")){
    //                 $("#story-page #tabs-contents .title-mobile").removeClass("active");
    //                 $this.find(".title-mobile").addClass("active");
    //                 $("#story-page #tabs-contents .tab-content .container").removeClass("is-open");
    //                 $this.find(".container").addClass("is-open");
    //             }
    //         });
    //
    //         $("#story-page #tabs-contents .title-mobile").click(function () {
    //             const clickTitle = $(this).parents(".tab-content");
    //             if(clickTitle.hasClass("active")){
    //                 $(this).parents(".tab-content").removeClass("active");
    //                 $(this).parents(".tab-content").find(".container").removeClass("is-open");
    //                 $(this).removeClass("active");
    //             } else {
    //                 $(this).addClass("active");
    //                 $(this).parents(".tab-content").addClass("active");
    //                 $(this).parents(".tab-content").find(".container").addClass("is-open");
    //             }
    //         });
    //
    //         // $(window).resize(function(){
    //         //     const widthOn = $( document ).width();
    //         //     if(widthOn < 768 ){
    //         //         $("#story-page #tabs-contents .title-mobile").click(function () {
    //         //             const clickTitle = $(this);
    //         //             if(clickTitle.hasClass("active")){
    //         //                 $(this).removeClass("active");
    //         //                 $(this).parents(".tab-content").removeClass("active");
    //         //                 $(this).parents(".tab-content").find(".container").removeClass("is-open");
    //         //             } else {
    //         //                 $(this).addClass("active");
    //         //                 $(this).parents(".tab-content").addClass("active");
    //         //                 $(this).parents(".tab-content").find(".container").addClass("is-open");
    //         //             }
    //         //         });
    //         //     }
    //         // });
    //     } else {
    //         $("#story-page #tabs-contents .title-mobile").removeClass("active");
    //         $("#story-page #tabs-title .tab-reviews").click(function () {
    //             $("#story-page #tabs-title .tab-reviews").removeClass("active");
    //             $(this).addClass("active");
    //
    //             const dataTab = $(this).attr("data-tab"),
    //                 itemContent = $("#story-page #tabs-contents .tab-content"),
    //                 itemMembers = $("#story-page .other-members .col-other-members");
    //
    //             itemContent.each(function () {
    //                 const dataContent = $(this).attr("data-content");
    //                 if(dataContent == dataTab){
    //                     $("#story-page #tabs-contents .tab-content").removeClass("active");
    //                     $(this).addClass("active");
    //                 }
    //             });
    //
    //             itemMembers.each(function () {
    //                 const dataMember = $(this).attr("data-members");
    //                 if(dataMember == dataTab){
    //                     $("#story-page .other-members .col-other-members").removeClass("active");
    //                     $(this).addClass("active");
    //                 }
    //             });
    //         });
    //
    //         //js check content
    //         const checkTabContent = $("#story-page #tabs-title .tab-reviews");
    //         checkTabContent.each(function () {
    //             const $this = $(this);
    //             if($this.hasClass("active")){
    //                 const b = $this.attr("data-tab"),
    //                     c = $("#story-page #tabs-contents .tab-content");
    //                 c.each(function () {
    //                     const dataMember = $(this).attr("data-content");
    //                     if(dataMember == b){
    //                         $("#story-page #tabs-contents .tab-content").removeClass("active");
    //                         $(this).addClass("active");
    //                     }
    //                 })
    //             }
    //         });
    //     }
    // }
    //
    // const width = window.matchMedia("(max-width: 767px)")
    // onSize(width);
    // width.addListener(onSize);


    $(window).on('load resize', function(){
        function control_imgResize() {
            if (parseInt($(window).width()) < 768) {
                const itemTab = $("#story-page #tabs-contents .tab-content");
                itemTab.each(function () {
                    const $this = $(this);
                    if($this.hasClass("active")){
                        $("#story-page #tabs-contents .title-mobile").removeClass("active");
                        $this.find(".title-mobile").addClass("active");
                        $("#story-page #tabs-contents .tab-content .container").removeClass("is-open");
                        $this.find(".container").addClass("is-open");
                    }
                });

                $("#story-page #tabs-contents .title-mobile").click(function () {
                    const clickTitle = $(this).parents(".tab-content");
                    if(clickTitle.hasClass("active")){
                        $(this).parents(".tab-content").removeClass("active");
                        $(this).parents(".tab-content").find(".container").removeClass("is-open");
                        $(this).removeClass("active");
                    } else {
                        $(this).addClass("active");
                        $(this).parents(".tab-content").addClass("active");
                        $(this).parents(".tab-content").find(".container").addClass("is-open");
                    }
                });
            } else {
                $("#story-page #tabs-contents .title-mobile").removeClass("active");
                $("#story-page #tabs-title .tab-reviews").click(function () {
                    $("#story-page #tabs-title .tab-reviews").removeClass("active");
                    $(this).addClass("active");

                    const dataTab = $(this).attr("data-tab"),
                        itemContent = $("#story-page #tabs-contents .tab-content"),
                        itemMembers = $("#story-page .other-members .col-other-members");

                    itemContent.each(function () {
                        const dataContent = $(this).attr("data-content");
                        if(dataContent == dataTab){
                            $("#story-page #tabs-contents .tab-content").removeClass("active");
                            $(this).addClass("active");
                        }
                    });

                    itemMembers.each(function () {
                        const dataMember = $(this).attr("data-members");
                        if(dataMember == dataTab){
                            $("#story-page .other-members .col-other-members").removeClass("active");
                            $(this).addClass("active");
                        }
                    });
                });

                //js check content
                const checkTabContent = $("#story-page #tabs-title .tab-reviews");
                checkTabContent.each(function () {
                    const $this = $(this);
                    if($this.hasClass("active")){
                        const b = $this.attr("data-tab"),
                            c = $("#story-page #tabs-contents .tab-content");
                        c.each(function () {
                            const dataMember = $(this).attr("data-content");
                            if(dataMember == b){
                                $("#story-page #tabs-contents .tab-content").removeClass("active");
                                $(this).addClass("active");
                            }
                        })
                    }
                });
            }
        }
        control_imgResize();
        $(function(){
            var timer = false;
            $(window).resize(function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    control_imgResize();
                }, 200);
            });
        });
    });

});
