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

  // connection choice click
  $(".submenu--account__list__login").click(function () {
    $(".popupconnectionchoice").css("display", "flex");
  });

  // close connection
  $(
    ".popupconnectionchoice__popup__close-button, .popupconnection__popup__close-button"
  ).click(function () {
    $(".popupconnectionchoice").css("display", "none");
    $(".popupconnection").css("display", "none");
  });

  // click connection
  $(".popupconnectionchoice__popup__choice__login").click(function () {
    $(".popupconnection").css("display", "flex");
    $(".popupconnectionchoice").css("display", "none");
  });
  // END
});
