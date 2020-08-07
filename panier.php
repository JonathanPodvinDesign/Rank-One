<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - Mon panier</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS -->
    <!-- CSS__fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Graduate&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/fonts/fonts.css" />
    <!-- CSS__fontawesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    <!-- CSS__flexbos -->
    <link rel="stylesheet" href="assets/flexbox/css/flexboxgrid.css" />
    <!-- CSS__style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <!-- BODY -->
  <!-- BODY -->
  <!-- BODY -->

  <body>
    <!-- HEADER --------->
    <!-- HEADER --------->
    <!-- HEADER --------->
    <?php
      include 'header-yellow.php';
    ?>

    <!-- PANIER -->
    <!-- PANIER -->
    <!-- PANIER -->
    <div class="panier margin-top-fixed-for-sticky-menu">
      <!-- title -->
      <div class="categories__title categories__title--panier">
        <div class="hook">
          <img src="img/hook-yellow.svg" alt="Hook" />
        </div>
        <h2>
          Mon<br />
          Panier
        </h2>
      </div>
      <div class="panier__categories">
        <div class="panier__categories__commande">
          <a href="#"
            ><button class="third-button">Passer la commande</button></a
          >
        </div>
        <div class="panier__categories__item">
          <p class="panier__categories__item__name">Tshirt Rank One</p>
          <p class="panier__categories__item__information">
            Lorem ipsum dolor sit amet, consectetur adipiscing.
          </p>
          <p class="panier__categories__item__price">69€</p>
          <div class="panier__categories__item__remove">
            <span>&nbsp</span>
            <span>&nbsp</span>
          </div>
        </div>
        <div class="panier__categories__item">
          <p class="panier__categories__item__name">Tshirt Rank One</p>
          <p class="panier__categories__item__information">
            Lorem ipsum dolor sit amet, consectetur adipiscing.
          </p>
          <p class="panier__categories__item__price">69€</p>
          <div class="panier__categories__item__remove">
            <span>&nbsp</span>
            <span>&nbsp</span>
          </div>
        </div>
        <div class="panier__categories__item">
          <p class="panier__categories__item__name">Tshirt Rank One</p>
          <p class="panier__categories__item__information">
            Lorem ipsum dolor sit amet, consectetur adipiscing.
          </p>
          <p class="panier__categories__item__price">69€</p>
          <div class="panier__categories__item__remove">
            <span>&nbsp</span>
            <span>&nbsp</span>
          </div>
        </div>
        <div class="panier__categories__item">
          <p class="panier__categories__item__name">Tshirt Rank One</p>
          <p class="panier__categories__item__information">
            Lorem ipsum dolor sit amet, consectetur adipiscing.
          </p>
          <p class="panier__categories__item__price">69€</p>
          <div class="panier__categories__item__remove">
            <span>&nbsp</span>
            <span>&nbsp</span>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <!-- FOOTER -->
    <!-- FOOTER -->
    <?php
      include 'footer-social.php';
  ?>

    <!-- SCRIPT -->
    <!-- SCRIPT -->
    <!-- SCRIPT -->
    <?php
      include 'script.php';
  ?>
  </body>
</html>
