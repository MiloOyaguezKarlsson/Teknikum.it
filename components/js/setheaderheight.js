$(document).ready(function(){
  var navHeight = $(".get-height").height();
  $(".jumbotron").css({
    "margin-top": (navHeight + "px"),
    "height": ($(window).height - navHeight) + "px"
  });
});
