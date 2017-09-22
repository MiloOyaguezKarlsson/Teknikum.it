$(document).ready(function(){
  var navHeight = $(".navbar").height();
  $(".jumbotron").animate({
    marginTop: (navHeight + "px"),
    height: (($(window).height() - navHeight) + "px")
  }, 0);
});

function setHeaderCss(nav) {
  var navHeight = nav;
  $(".jumbotron").animate({
    marginTop: (navHeight + "px"),
    height: (($(window).height() - navHeight) + "px")
  }, 400);
}
