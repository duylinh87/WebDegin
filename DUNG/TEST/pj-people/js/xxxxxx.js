jQuery(function($) {
  var ua = navigator.userAgent.toLowerCase();
  var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);

  //sp tel
  $(function(){
    if (!isMobile) {
      $('a[href^="tel:"]').on('click', function(e) {
        e.preventDefault();
      });
      $('a[href^="tel:"]').css({
        "pointer-events": "none",
        "color": "#333333"
      });
      $('a[href^="tel:"]').hover(function(){
        $(this).css({
          "opacity": "1",
          "cursor": "default",
          "text-decoration": "none"
        });
      });
    }
  });
});