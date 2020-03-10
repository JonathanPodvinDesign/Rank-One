$(document).ready(function() {
  // menu
  $(".nav__bar__hamburger").click(function() {
    $(".nav__bar__menu").toggleClass("nav__bar__menu__show");
    $(".nav__bar__hamburger__line").toggleClass(
      "nav__bar__hamburger__line__yellow"
    );
    $(".nav__bar__hamburger").toogleClass("nav__bar__hamburger__fixed");
  });

  // sub-menu
  $(".nav__bar__menu__link").click(function() {
    $(".nav__bar__menu__link__sub-menu").toggleClass(
      "nav__bar__menu___link__sub-menu__show"
    );
  });
  //  menu scrolling down
  $(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $("header").addClass("header-scrolling-down");
    } else if ($(window).scrollTop() < 60) {
      $("header").removeClass("header-scrolling-down");
    }
  });
});
