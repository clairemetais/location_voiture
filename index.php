<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/bootstrap.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="shortcut icon" href="img\logo40.png" type="image/x-icon">
  <title>Accueil</title>
</head>

<body>
  <header>
    <div class="bg_header_index">
      <?php
      require_once("header.html")
       ?>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
    </div>  
  </header>
  <main class="index">
    <section class="bg_index_presentation pt-5">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide ">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active ">
              <img src="img\actuelle\chevrolet_pays-m.jpg" class="d-block w-100 " alt="chevrolet">
              <div class="carousel-caption d-none d-md-block">
                <h3>titre de l'image</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="img\ancienne\dore_pays_m.jpg" class="d-block w-100 " alt="voiture_dore">
              <div class="carousel-caption d-none d-md-block">
                <h3>titre de l'image</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="img\actuelle\grise_pays.jpg" class="d-block w-100 " alt="voiture grise">
              <div class="carousel-caption d-none d-md-block">
                <h3>titre de l'image</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
              </div>>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <section class="bg_index_presentation">
      <div class="container pt-5">
        <h2>A propos de <span class="color_brand">American Car</span></h2>
        <p class="pb-5 mb-0">À ce jour, cinq agences sont implantées dans le Gard, le Vaucluse et l’Hérault : Avignon,
          Nîmes, Alès, Les Angles, Montpellier. Nous vous proposons une large gamme de voitures de tourisme et de
          véhicules utilitaires. Nous mettons également à votre service notre réseau d’agents de location de véhicules
          affiliés de Piolenc, Fournès, Monteux, Saint-Rémy-de-Provence, Beaucaire et Uzès.</p>
      </div>
    </section>
    <section class="bg_index_actu pt-3">
      <div class="container text-center  pb-5 ">
        <div class="mx-auto">
          <p>Restez informé</p>
          <h2>Articles Récents</h2>
        </div>
        <div class="row pt-3 text-md-start">
          <div class="p-2 g-col-12 col-md-4 d-flex justify-content-center">
            <div class="card border-0 rounded-1 h-100" style="width:25rem">
              <img src="img\actualité\noel_moyen.jpg" class="card-img-top rounded-top-1" alt="boule de noël">
              <div class="card-body ps-0">
                <h5 class="card-title">Solde de Noël</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="fiche_actu.php" title="fiche de l'actu" class="btn ">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="p-2 g-col-12 col-md-4 d-flex justify-content-center">
            <div class="card border-0 rounded-1 h-100" style="width:25rem">
              <img src="img\actualité\avion_petit.jpg" class="card-img-top rounded-top-1" alt="avion American airlines">
              <div class="card-body ps-0">
                <h5 class="card-title">Billet d'avion offert</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="fiche_actu.php" title="fiche de l'actu" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="p-2 g-col-12 col-md-4 d-flex justify-content-center">
            <div class="card border-0 rounded-1 h-100" style="width:25rem">
              <img src="img\actualité\essence_moyen.jpg" class="card-img-top rounded-top-1" alt="poignet d'essence">
              <div class="card-body ps-0">
                <h5 class="card-title">Diminution des tarifs</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="fiche_actu.php" title="fiche de l'actu" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2 col-3 mx-auto mt-5">
          <a class="btn btn-dark " href="liste_actu.php" title="liste des actualités" role="button"><span class="jauge-remplissage"></span>Voir toutes nos
            actualités</a>
        </div>
      </div>
    </section>
  </main>

  <?php
    require_once("footer.html")
    ?>

</body>
<script src="https://kit.fontawesome.com/c20989b72b.js" crossorigin="anonymous"></script>
<script src="scripts/bootstrap.bundle.min.js"></script>
<script src="scripts/scripts.js"></script>

</html>