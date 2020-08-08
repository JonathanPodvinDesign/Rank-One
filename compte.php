<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - Mon comtpe</title>
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

    <!-- COMPTE -->
    <!-- COMPTE -->
    <!-- COMPTE -->
    <div class="compte main-white margin-top-fixed-for-sticky-menu">
      <!-- title -->
      <div class="categories__title categories__title--compte">
        <div class="hook">
          <img src="img/hook-yellow.svg" alt="Hook" />
        </div>
        <h2>
          Mon<br />
          Compte
        </h2>
      </div>
      <!-- compte informations -->
      <div class="compte__informations">
        <div class="compte__informations__choices">
          <!-- Col Left -->
          <div class="compte__informations__choices__col">
            <input type="email" placeholder="Email" />
            <input type="text" placeholder="Prénom" />
            <input type="text" placeholder="Nom" />
            <input type="date" placeholder="Date de naissance" />
            <input type="text" placeholder="Pseudo" />
            <input type="text" placeholder="Lo*********" />
          </div>
          <!-- Col Right -->
          <div class="compte__informations__choices__col">
            <select name="" id="">
              <option value="None">Choisir un jeu</option>
              <option value="Counter Strike">Counter Strike</option>
              <option value="Dota">Dota 2</option>
              <option value="Fifa">Fifa</option>
              <option value="Fornite">Fortnite</option>
              <option value="Hearthstone">Hearthstone</option>
              <option value="League of Legends">League of Legends</option>
              <option value="Overwatch">Overwatch</option>
              <option value="Valorant">Valorant</option>
            </select>
            <select name="" id="">
              <option value="None">Choisir votre bar</option>
              <option value="Grenoble">Grenoble</option>
              <option value="Lyon">Lyon</option>
            </select>
            <input type="text" placeholder="Adresse" />
            <input type="text" placeholder="Ville" />
            <input type="text" placeholder="Code postal" />
            <input type="text" placeholder="Téléphone" class="mb-0" />
          </div>
        </div>
        <button class="secondary-button">Enregistrer</button>
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
