<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" href="img\logo40.png" type="image/x-icon">
    <title>Service</title>
  </head>
  <body>
    <header>
      <div class="bg_header_fiche_actu">
        <?php
          require_once("header.html")
        ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item"><a href="liste_actu.php">Liste actus</a></li>
                <li class="breadcrumb-item active" aria-current="page">Les actus</li>
            </ol>
        </nav>
      </div>
    </header>
    <main>
      <div class="container text-center">
        <div class="row mt-5 mb-5">
          <div class="p-2 g-col-12 col-lg-7 ">
            <div class="row ">
              <div class="col-md-8 ">
                <h1 class="color_brand">The standard Lorem Ipsum passage, used since the 1500s</h1>
              </div>
              <div class="col-md-3 ms-auto">
                <p>10/05/2023</p>
              </div>
            </div>
            <div>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <a href="fiche_actu.php" title="fiche actualité" class="btn">Retour</a>
          </div>
          <div class="p2 g-col-12 col-lg-3 offset-lg-1">
            <img src="img\actualité\garage.jpg" alt="nettoyage garage" class="img-fluid">        
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

