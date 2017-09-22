var navHeadHeight;
$(document).ready(function() {
  navHeadHeight = $(".navbar-header").height();
  setLogoPosition();
  setBrandPosition();
});

$(window).scroll(function() {
  if ($(document).scrollTop() !== 0) {
    $('.navbar-header').css({
      "height": "0px",
      "opacity": "0"
    });
    $(".navbar-brand img").css({
      "left": "0"
    })
    $("#brand-ikon").css({
      "opacity": "1"
    });
  } else {
    $('.navbar-header').css({
      "height": navHeadHeight + "px",
      "opacity": "1"
    });
    $("#brand-ikon").css({
      "opacity": "0",
    });
  }
  setHeaderCss();
});

function setLogoPosition() {
  $("#brand-ikon").css({
    "left": -20 - $("#brand-ikon img").width() + "px"
  });
}

function setBrandPosition() {
  $(".navbar-brand img").css({
    "left": "calc(50% - " + ($(".navbar-brand img").width() / 2) + "px)"
  });
  console.log($(".navbar-brand img").width());
}
