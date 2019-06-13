$(document).ready(function () {
    function loady(){
    $("div.hidden")
        .css('opacity', 0)
        .slideDown(1000)
        .animate(
            { opacity: 1 },
            { queue: false, duration: 1500 }
        );
    }
    setTimeout(loady, 100);
    
    
    $.fn.nextOrFirst = function (selector) {
        var next = this.next(selector);
        return (next.length) ? next : this.prevAll(selector).last();
    };
    $("#cf2 img").click(function() {
        $(this)
        .removeClass('visible')
        .nextOrFirst()
        .addClass('visible');
    });
});

// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');
    
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    
    // top position relative to the document
    var pos = $(id).offset().top;
    
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});