$(document).ready(function () {
  // start

  // slider
  $(".slider__btn--1").click(function () {
    $(".slider__container__images").css("margin-left", "0px");
  });

  $(".slider__btn--2").click(function () {
    $(".slider__container__images").css("margin-left", "-100%");
  });

  $(".slider__btn--3").click(function () {
    $(".slider__container__images").css("margin-left", "-200%");
  });

  $(".slider__btn--4").click(function () {
    $(".slider__container__images").css("margin-left", "-300%");
  });

  // end
});
