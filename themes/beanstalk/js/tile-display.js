/**
 * Created by matt on 3/06/16.
 */
(function ($) {

    $(document).ready(function () {
        //var numChildren = $('.view-tiles.view-content.item-list.ul').children();
        //console.log(numChildren);
    });

    $('body').on('mousewheel', function(event) {
        event.preventDefault();
        var position = $('body').scrollLeft();
        var multiply = 30;
        position = position - (event.deltaY * multiply);
        $('body').scrollLeft(position);
        //console.log(event.deltaX, event.deltaY, event.deltaFactor);
        //console.log(position);

    });

    $("body").keydown(function(e) {
        var position = $('body').scrollLeft();
        var slideAmount = 40;
        if(e.keyCode == 37) { // left
            position = position - slideAmount;
        }
        else if(e.keyCode == 38) { // up
            position = position - slideAmount;
        }
        else if(e.keyCode == 39) { // right
            position = position + slideAmount;
        }
        else if(e.keyCode == 40) { // down
            position = position + slideAmount;
        }
        else if(e.keyCode == 33) { // page up
            position = position - (slideAmount * 5);
        }
        else if(e.keyCode == 34) { // page down
            position = position + (slideAmount * 5);
        }
        $('body').scrollLeft(position);
    });

})(jQuery);