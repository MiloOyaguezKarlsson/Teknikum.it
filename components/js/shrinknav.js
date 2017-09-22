var navHeadHeight;
var firstTime = true;

$(document).ready(function() {
  navHeadHeight = $(".navbar-header").height();
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 10 && firstTime) {
    $( "#navbar-header").stop().animate({
      height: 0,
    }, 400, setHeaderCss($(".nav").height()));
    firstTime = false;
  }
  else if ($(document).scrollTop() == 0){
    $("#navbar-header").stop().animate({
      height: navHeadHeight
    }, 400, setHeaderCss(navHeadHeight));
    firstTime = true;
  }
});
