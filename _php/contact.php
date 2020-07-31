<!DOCTYPE html>
<html lang="fr">
  <!-- HEAD -->

  <head>
    <title>Rank One - eSport Bars</title>
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

  <body>
    <!-- HEADER -->
    <?php include'header.php';?>

    <!-- MAIN SECTION -->
    <!-- CONTACT -->
    <section class="contact">
      <div class="contact__container">
        <!-- CONTACT INFORMATION -->
        <div class="contact__container__info">
          <!-- SOCIAL -->
          <div class="contact__container__info__social">
            <h3>Réseaux sociaux</h3>
            <div>
              <a
                href="www.twitter.com"
                class="contact__container__info__social__icon"
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                href="www.facebook.com"
                class="contact__container__info__social__icon"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                href="www.instagram.com"
                class="contact__container__info__social__icon"
                ><i class="fab fa-instagram"></i
              ></a>
              <a
                href="www.youtube.com"
                class="contact__container__info__social__icon"
                ><i class="fab fa-youtube"></i
              ></a>
            </div>
          </div>
          <!-- ADRESS -->
          <div class="contact__container__info__adress">
            <h3>Contact</h3>
            <p><strong>Téléphone</strong> : 04 76 93 00 15</p>
            <p><strong>Email</strong> : rankone@contact.com</p>
            <p><strong>Adresse</strong> : 2 rue Victor Hugo</p>
            <p><strong>Ville</strong> : Grenoble</p>
          </div>
          <!-- SCHEDULE -->
          <div class="contact__container__info__schedule">
            <h3>Horaires</h3>
            <p><strong>Du lundi au vendredi</strong> : 18 à 1h</p>
            <p><strong>Samedi</strong> : 16h à 1h</p>
            <p><strong>Dimanche</strong> : 16h à 23h</p>
          </div>
        </div>

        <!-- FORMULAIRE -->
        <!-- EMAIL -->
        <div class="contact__container__form">
          <div class="contact__container__form__name-email">
            <input
              type="text"
              required
              placeholder="Nom, Prénom"
              class="contact__container__form__name-email__input-name"
            />
            <input
              type="Email"
              required
              placeholder="Email"
              class="contact__container__form__name-email__input-email"
            />
          </div>
          <!-- SUBJECT -->
          <div class="contact__container__form__subject">
            <input type="text" required placeholder="Sujet" />
          </div>
          <!-- TEXTAREA -->
          <div class="contact__container__form__message">
            <textarea
              required
              rows="15"
              placeholder="Message ..."
              class="contact-form-textarea"
            ></textarea>
            <a href=""><button type="submit">Envoyer</button></a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php';?>

    <!-- SCRIPT -->
    <?php include"script.php";?>
  </body>
</html>
