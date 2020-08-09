$(document).ready(function () {
  // START

  // get Height
  var heightHeader = $("header").outerHeight();
  var heightMain = $(".main").outerHeight();
  var heightFooter = $("footer").outerHeight();

  // fix smaller height page compar to viewport
  $(".fix__small__height__page").css({
    height: `calc(100vh - ${heightHeader}px - ${heightMain}px - ${heightFooter}px)`,
  });

  $(".fix__small__height__page--white").css({
    height: `calc(100vh - ${heightHeader}px - ${heightMain}px - ${heightFooter}px)`,
  });

  // dropdown menu
  // evennement
  $(".evennement__selection__games").click(function () {
    $(".evennement__selection__dropdown--games").toggleClass("display--flex");
  });

  $(".evennement__selection__villes").click(function () {
    $(".evennement__selection__dropdown--villes").toggleClass("display--flex");
  });

  //  ranking
  $(".ranking__selection__games").click(function () {
    $(".ranking__selection__dropdown--games").toggleClass("display--flex");
  });

  $(".ranking__selection__mois").click(function () {
    $(".ranking__selection__dropdown--mois").toggleClass("display--flex");
  });

  $(".ranking__selection__villes").click(function () {
    $(".ranking__selection__dropdown--villes").toggleClass("display--flex");
  });
  // END
});
