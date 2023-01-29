<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" href="img\logo40.png" type="image/x-icon">
    <title>Ford</title>
  </head>
  <body>
    <header>
    <div class="bg_header_fiche_voiture">
        <?php
          require_once("header.html")
        ?>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item"><a href="parc_collection.php">Voitures de collection</a></li>
                <li class="breadcrumb-item"><a href="parc_actuel.php">Voitures actuelles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Les actus</li>
            </ol>
          </nav>
        </div>
    </header>
    <main class="fiche_voiture">
      <div class="container text-start mt-5">
        <div class="row mb-5">
          <div class=" col-12 col-lg-7 mx-auto">
            <img src="img\detail\entier_3_quart.jpg" class="img-fluid rounded-top-1 w-100 mb-4">
            <h1 class="mb-3">Ford</h1>
            <h2 class="mb-3 pt-3 border-top">Caracteristiques</h2>
            <h3>Detail du véhicule</h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
                quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per
                seacula quarta decima et quinta decima. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                odio.
            </p>
            <h3 class="mb-3 pt-3 border-top">A propos de ce véhicule</h3>
            <p>Dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                Dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <h3 class="mb-3 pt-3 border-top">Particularités</h3>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
          </div>
          <div class="col-12 col-lg-3 mx-auto">
            <div id="carousel" class="carousel slide mb-5 " data-bs-ride="carousel">
              <div class="carousel-inner rounded-top-1 ">
                <div class="carousel-item active">
                  <img src="img\detail\roue.jpg" class="d-block w-100 " alt="roue">
                </div>
                <div class="carousel-item">
                  <img src="img\detail\volant.jpg" class="d-block w-100" alt="volant">
                </div>
                <div class="carousel-item">
                  <img src="img\detail\marque.jpg" class="d-block w-100" alt="marque ">
                </div>
                <div class="carousel-item">
                  <img src="img\detail\phare.jpg" class="d-block w-100" alt="phare">
                </div>
                <div class="carousel-item">
                  <img src="img\detail\dessous.jpg" class="d-block w-100" alt="dessous">
                </div>
              </div>
            </div>
            <div >
              <h3 class="mb-3">Reserver cette voiture maintenant</h3>
              <form >
                <label for="exampleInputPassword1" class="form-label visually-hidden">Nom</label>
                  <input class="form-control form-control-sm mb-4" type="text" placeholder="Votre nom" aria-label=".form-control-sm example">
                <label for="exampleInputPassword1" class="form-label visually-hidden">Prenom</label>
                  <input class="form-control form-control-sm mb-4" type="text" placeholder="Votre prenom" aria-label=".form-control-sm example">
                <label for="exampleInputPassword1" class="form-label visually-hidden">Adresse</label>
                  <input class="form-control form-control-sm mb-4" type="text" placeholder="Votre adresse" aria-label=".form-control-sm example">
                <label for="exampleInputPassword1" class="form-label visually-hidden">Téléphone</label>
                  <input class="form-control form-control-sm mb-4" type="text" placeholder="Votre telephone" aria-label=".form-control-sm example">
                <label for="exampleInputPassword1" class="form-label visually-hidden">Mail</label>
                  <input class="form-control form-control-sm mb-4" type="email" placeholder="Votre mail" aria-label=".form-control-sm example"> 
                <label for="exampleInputPassword1" class="form-label visually-hidden">Message</label> 
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message" ></textarea>
                <a class="btn  mt-5" type="submit" role="button">Reserver</a>
              </form>
            </div>
          </div>
        </div>
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
