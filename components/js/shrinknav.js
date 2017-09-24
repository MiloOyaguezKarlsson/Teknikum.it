var navHeadHeight;
var firstTime = true;
var navHeight;
var navClassHeight;

$(document).ready(function() {
  navHeight = $("nav").height();
  navHeadHeight = $(".navbar-header").height();
  navClassHeight = $(".nav").height();
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 10 && firstTime) {
    $( "#navbar-header").stop().animate({
      height: 0,
    }, 400, setHeaderCss(navClassHeight));
    firstTime = false;
    $(".hide-this").css("opacity", 0);
    $(".navbar-form").css({"top": 0, "margin-top": 0});
  }
  else if ($(document).scrollTop() == 0){
    $("#navbar-header").stop().animate({
      height: navHeadHeight
    }, 400, setHeaderCss(navHeight));
    firstTime = true;
    $(".hide-this").css("opacity", 1);
    $(".navbar-form").css({"top": "20px", "margin-top": "8px"});
  }
});
