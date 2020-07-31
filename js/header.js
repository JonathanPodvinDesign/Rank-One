$(document).ready(function () {
  // START
  // menu
  $(".nav__bar__hamburger").click(function () {
    $(".nav__bar__menu").toggleClass("nav__bar__menu__show");
    $(".nav__bar__hamburger__line").toggleClass(
      "nav__bar__hamburger__line__yellow"
    );
    $(".nav__bar__hamburger").toogleClass("nav__bar__hamburger__fixed");
  });

  // sub-menu
  $(".submenu--bar").click(function () {
    $(".submenu--bar__list").toggleClass("submenu--bar__list--show");
    $(".submenu--esport__list").addClass("submenu--bar__list--hide");
    $(".submenu--esport__list").removeClass("submenu--bar__list--show");
    $(".submenu--account__list").addClass("submenu--bar__list--hide");
    $(".submenu--account__list").removeClass("submenu--bar__list--show");
  });

  $(".submenu--esport").click(function () {
    $(".submenu--esport__list").toggleClass("submenu--bar__list--show");
    $(".submenu--bar__list").addClass("submenu--bar__list--hide");
    $(".submenu--bar__list").removeClass("submenu--bar__list--show");
    $(".submenu--account__list").addClass("submenu--bar__list--hide");
    $(".submenu--account__list").removeClass("submenu--bar__list--show");
  });

  $(".submenu--account").click(function () {
    $(".submenu--account__list").toggleClass("submenu--bar__list--show");
    $(".submenu--bar__list").addClass("submenu--bar__list--hide");
    $(".submenu--bar__list").removeClass("submenu--bar__list--show");
    $(".submenu--esport__list").addClass("submenu--bar__list--hide");
    $(".submenu--esport__list").removeClass("submenu--bar__list--show");
  });

  //  menu scrolling down
  $(window).scroll(function () {
    if ($(window).scrollTop() > 60) {
      $("header").addClass("sticky__menu");
    } else if ($(window).scrollTop() < 60) {
      $("header").removeClass("sticky__menu");
    }
  });

  //  menu scrolling down (yellow)
  $(window).scroll(function () {
    if ($(window).scrollTop() > 60) {
      $(".header--yellow").addClass("sticky__menu--yellow");
    } else if ($(window).scrollTop() < 60) {
      $(".header--yellow").removeClass("sticky__menu--yellow");
    }
  });

  // margin top contact section when sticky menu
  $(document).scroll(function () {
    if ($(document).scrollTop() > 60) {
      $(".margin-top-fixed-for-sticky-menu").css("padding-top", "219px");
    } else if ($(document).scrollTop() < 60) {
      $(".margin-top-fixed-for-sticky-menu").css("padding-top", "0px");
    }
  });
  // END
});
