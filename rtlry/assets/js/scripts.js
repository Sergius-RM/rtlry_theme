jQuery.noConflict(); (function($) {

    ///tiny-slider
    var slider = tns({
        container: '.review_list',
        autoHeight: true,
        items: 1,
        loop: true,
        swipeAngle: false,
        speed: 500,
        mouseDrag: true,
        autoplay: true,
        controls: false,
        navPosition: 'bottom',
        responsive: {
            640: {
              items: 2
            }
          }
      });

})(jQuery);