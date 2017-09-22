$(document).ready(function(){
  setHeaderCss();
});

function setHeaderCss() {
  var navHeight = $(".get-height").height();
  $(".jumbotron").css({
    "margin-top": (navHeight + "px"),
    "min-height": (($(window).height() - navHeight) + "px")
  });
}
