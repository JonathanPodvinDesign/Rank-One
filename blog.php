<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - Blog</title>
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
    <!-- background -->
    <div class="background">
      <div>&nbsp</div>
      <div>&nbsp</div>
      <div>&nbsp</div>
      <div>&nbsp</div>
    </div>

    <!-- HEADER --------->
    <!-- HEADER --------->
    <!-- HEADER --------->
  <?php
      include 'header.php';
  ?>

    <!-- BLOG -->
    <!-- BLOG -->
    <!-- BLOG -->

    <div class="blog">
      <!-- article 1 -->
      <article>
        <div class="title">
          <h2>Les souris gaming</h2>
          <h3>Comment faire le bon choix ?</h3>
          <p>28.05.2018</p>
        </div>
        <a href="blog-page.php"
          ><button class="primary-button">
            Lire l'article
          </button></a
        >
      </article>

      <!-- article 2 -->
      <article>
        <div class="title">
          <h2>Controller vs keyboard</h2>
          <h3>Quand le skill ne suffit plus.</h3>
          <p>21.05.2018</p>
        </div>
        <a href="blog-page.php"
          ><button class="primary-button">
            Lire l'article
          </button></a
        >
      </article>

      <!-- article 3 -->
      <article>
        <div class="title">
          <h2>Warm up</h2>
          <h3>L'échauffement avant la ranked.</h3>
          <p>14.05.2018</p>
        </div>
        <a href="blog-page.php"
          ><button class="primary-button">
            Lire l'article
          </button></a
        >
      </article>

      <!-- article 4 -->
      <article>
        <div class="title">
          <h2>League of legend patch 8.6</h2>
          <h3>La meta.</h3>
          <p>07.05.2018</p>
        </div>
        <a href="blog-page.php"
          ><button class="primary-button">
            Lire l'article
          </button></a
        >
      </article>
    </div>

    <!-- PAGINATION -->
    <!-- PAGINATION -->
    <!-- PAGINATION -->

    <div class="pagination">
      <div class="selection">
        <div><a href="#"> <<</a></div>
        <div><a href="#"> <</a></div>
        <div><a href="#">1</a></div>
        <div><a href="#">2</a></div>
        <div><a href="#">3</a></div>
        <div><a href="#">4</a></div>
        <div><a href="#">5</a></div>
        <div><a href="#">></a></div>
        <div><a href="#">>></a></div>
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
