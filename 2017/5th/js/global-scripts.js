// Navbar animation on scroll
$("#mainNav").affix({
	offset: {
		top: 100
	}
});

// Smooth scroll
$(function() {
  $("a[href*=\"#\"]:not([href=\"#\"])").click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) +']');
      if (target.length) {
        $("html, body").animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Animate on scroll
function scrollAnimation(element, animation, delay, percentFromTop) {
	var percent = percentFromTop + "%";
  var $element = $(element);
  $element.css("opacity", 0);
  $element.waypoint(function() {
    if (typeof(delay) == "undefined") {
      $element.addClass("animated " + animation);
      $element.addClass("opacity-fix");
    } else {
      setTimeout(function() {
        $element.addClass("animated " + animation);
        $element.addClass("opacity-fix");
      }, delay);
    }
  }, { offset: percent});
}

//material contact form animation
$('.material-form').find('.form-control').each(function() {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
})
$('.material-form').find('.form-control').focus(function() {
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
})
$('.material-form').find('.form-control').blur(function() {
  if ($(this).val().length == 0) {
    $(this).parent('.input-block').removeClass('focus');
    $(this).parent().find('label').animate({
      'top': '25px',
      'fontSize': '18px'
    }, 300);
  }
});
