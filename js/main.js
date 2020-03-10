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
      $("header").addClass("sticky-menu");
    } else if ($(window).scrollTop() < 60) {
      $("header").removeClass("sticky-menu");
    }
  });
  // .contact : déplacement de 159px (y) quand le header est fixed

  // $(window).scroll(function() {
  //   if ($(window).scrollTop() > 60) {
  //     $(".contact footer").addClass("transform-for-sticky-menu");
  //   } else if ($(window).scrollTop() < 60) {
  //     $(".contact footer").removeClass("transform-for-sticky-menu");
  //   }
  // });

  // margin top contact section when sticky menu
  $(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $(".contact").css("padding-top", "219px");
    } else if ($(window).scrollTop() < 60) {
      $(".contact").css("padding-top", "60px");
    }
  });
  //end
});
