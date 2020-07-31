// store product selection
$("#all").click(function () {
  $(".all").css("display", "flex");
});

$("#tshirt").click(function () {
  $(".casquette, .bundle").css("display", "none");
  $(".tshirt").css("display", "flex");
});

$("#casquette").click(function () {
  $(".tshirt, .bundle").css("display", "none");
  $(".casquette").css("display", "flex");
});

$("#bundle").click(function () {
  $(".casquette, .tshirt").css("display", "none");
  $(".bundle").css("display", "flex");
});

// product imaage
$(".product__image__thumbnails__thumbnail:nth-child(1)").click(function () {
  $(".product__image").css(
    "background-image",
    "url('/img/products/casquettenoir/casquettenoir.jpg"
  );
});

$(".product__image__thumbnails__thumbnail:nth-child(2)").click(function () {
  $(".product__image").css(
    "background-image",
    "url('/img/products/casquettenoir/casquettenoir--2.jpg"
  );
});

$(".product__image__thumbnails__thumbnail:nth-child(3)").click(function () {
  $(".product__image").css(
    "background-image",
    "url('/img/products/casquettenoir/casquettenoir--3.jpg"
  );
});
