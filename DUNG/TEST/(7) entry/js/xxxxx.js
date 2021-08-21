jQuery(function ($) {
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

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

    $(".blockSetup.blockProfile .icon-toggle").click(function () {
        $(".blockSetup.blockProfile .contentBox").slideToggle();
    });

    $(".blockSetup.blockSkill .row-item .icon-toggle").click(function () {
        $(this).parents(".row-item").find(".contentBox").slideToggle();
    });

});