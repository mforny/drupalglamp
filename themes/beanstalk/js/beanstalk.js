/**
 * Created by matt on 24/08/16.
 */
(function ($) {


    $(document).ready(function () {
        $('body').addClass("document-ready");
        $('.region-header').addClass("closed");
    });

//Menu function
    function mattyMenu() {
        if ($('.region-header').hasClass("open") ) {
            $('.region-header').addClass("closed");
            $('.region-header').removeClass("open");
        }
        else {
            $('.region-header').addClass("open");
            $('.region-header').removeClass("closed");
        }

    };

    $('.mobile-menu').click( function() {mattyMenu() });


})(jQuery);