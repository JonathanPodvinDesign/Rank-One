<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - Créer une team</title>
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

    <!-- team -->
    <!-- team -->
    <!-- team -->
    <div class="team main-white margin-top-fixed-for-sticky-menu">
      <!-- title -->
      <div class="categories__title categories__title--team">
        <div class="hook">
          <img src="img/hook-yellow.svg" alt="Hook" />
        </div>
        <h2>
          Créer une<br />
          Team
        </h2>
      </div>
      <!-- team informations -->
      <div class="team__informations">
        <div class="team__informations__choices">
          <!-- Col Left -->
          <div class="team__informations__choices__col">
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
            <input type="text" placeholder="Nom de l'équipe" />
            <input type="text" placeholder="Acronyme (2 à 4 lettres)" />
            <input type="text" placeholder="Leader" />
            <input type="text" placeholder="Coach" />
          </div>
          <!-- Col Right -->
          <div class="team__informations__choices__col">
            <input type="text" placeholder="Joueur 1" />
            <input type="text" placeholder="Joueur 2" />
            <input type="text" placeholder="Joueur 3" />
            <input type="text" placeholder="Joueur 4" />
            <input type="text" placeholder="Joueur 5" />
            <input type="text" placeholder="Joueur 6" />
          </div>
        </div>
        <button class="secondary-button">Valider</button>
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
