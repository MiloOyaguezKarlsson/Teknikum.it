$(document).ready(function(){
  setHeaderCss($(".navbar").height());
});

function setHeaderCss(nav) {
  console.log(nav);
  var navHeight = nav;
  $(".jumbotron").animate({
    marginTop: (navHeight + "px"),
    height: (($(window).height() - navHeight) + "px")
  }, 400);
}
