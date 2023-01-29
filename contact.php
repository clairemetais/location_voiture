<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/bootstrap.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="shortcut icon" href="img\logo40.png" type="image/x-icon">
  <title>Contact</title>
</head>

<body>
  <header>
    <div class="bg_header_contact">
      <?php
        require_once("header.html")
      ?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
    </div>
  </header>
  <main>
    <div class="container text-center">
      <div class="row mt-5 mb-5">
        <h2 class=" text-md-start mb-5">Nos moyens de <span class="color_brand">contact</span></h2>
        <div class="col-12 col-md-4 border-end ">
          <address>
            <i class="fa-solid fa-location-dot mb-5"></i>
            <h3>ADRESSE</h3>
            <p>151 avenue Pierre Sémard<br>
              84000 Avignon
            <p>
          </address>
        </div>
        <div class="col-12 col-md-4 border-end">
          <i class="fa-solid fa-phone mb-5"></i>
          <h3>TELEPHONE</h3>
          <p>telephone 1 : 0615020481</p>
          <p>telephone 2 : 0615020481</p>
        </div>
        <div class="col-12 col-md-4 border-end">
          <i class="fa-solid fa-envelope mb-5"></i>
          <h3>MAIL</h3>
          <p>Mail : contact@contact.fr</p>
          <p>Site web: https://american car.fr</p>
        </div>
      </div>
      <div class="container text-start">
        <h2 class=" mb-5">Nous <span class="color_brand">écrire</span> via ce formulaire</h2>
        <form class="mb-5 mx-auto" action="#">
          <div class="row g-3 mb-4">
            <div class="col-lg-6 col-sm-12 ">
              <input type="text" class="form-control p-3" id="validationDefault01" placeholder="Votre nom" required>
            </div>
            <div class="col-lg-6 col-sm-12 ">
              <input type="text" class="form-control p-3" id="validationDefault02" placeholder="Votre prenom" required>
            </div>
          </div>
          <div class="mb-4 col-md-12 ">
            <input type="email" class="form-control p-3" id="exampleFormControlInput1" placeholder="Votre email">
          </div>
          <div class="mb-5  col-md-12 ">
            <textarea class="form-control p-3" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message"></textarea>
          </div>
          <div class="col-12 ">
            <a class="btn " type="submit">Envoyer</a>
          </div>
        </form>
      </div>  
    </div> 
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91931.38510041684!2d4.763217280554049!3d43.941658217999944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb8739bc9d07%3A0xe6429b6efa1d7b36!2sAvignon!5e0!3m2!1sfr!2sfr!4v1674857640111!5m2!1sfr!2sfr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>
  <footer>
    <?php
        require_once("footer.html")
        ?>
  </footer>
</body>
<script src="https://kit.fontawesome.com/c20989b72b.js" crossorigin="anonymous"></script>
<script src="scripts/bootstrap.bundle.min.js"></script>
<script src="scripts/scripts.js"></script>

</html>
Adresse
Google map
Formulaire de contact avec nom, prénom, mail, message