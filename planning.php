<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - Mon planning</title>
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

    <div class="main-white">
      <!-- PLANNING -->
      <!-- PLANNING -->
      <!-- PLANNING -->
      <div class="planning main margin-top-fixed-for-sticky-menu">
        <!-- title -->
        <div class="categories__title categories__title--planning">
          <div class="hook">
            <img src="img/hook-yellow.svg" alt="Hook" />
          </div>
          <h2>
            Mon<br />
            Planning
          </h2>
        </div>
        <div class="planning__categories">
          <div class="planning__categories__event">
            <p class="planning__categories__event__name">Tournoi CSGO</p>
            <p class="planning__categories__event__ville">Grenoble</p>
            <p class="planning__categories__event__date">18.07.18</p>
            <p class="planning__categories__event__heure">20h</p>
            <div class="planning__categories__event__remove">
              <span>&nbsp</span>
              <span>&nbsp</span>
            </div>
          </div>
          <div class="planning__categories__event">
            <p class="planning__categories__event__name">Fatale Duel</p>
            <p class="planning__categories__event__ville">Grenoble</p>
            <p class="planning__categories__event__date">25.07.18</p>
            <p class="planning__categories__event__heure">21h</p>
            <div class="planning__categories__event__remove">
              <span>&nbsp</span>
              <span>&nbsp</span>
            </div>
          </div>
          <div class="planning__categories__event">
            <p class="planning__categories__event__name">Coaching</p>
            <p class="planning__categories__event__ville">Grenoble</p>
            <p class="planning__categories__event__date">27.07.18</p>
            <p class="planning__categories__event__heure">18h</p>
            <div class="planning__categories__event__remove">
              <span>&nbsp</span>
              <span>&nbsp</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Div Fix Small Height Page -->
      <div class="fix__small__height__page"></div>
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
