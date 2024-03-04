<!doctype html>
<html lang="en">
    <head>
        <title>Kodutöö nr 4</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
    <div class="conteiner">
        <nav class="navbar navbar-expand-sm bg-body">
          <div class="container">
            <nav class="navbar bg-body">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="drupal.png" alt="drupal" height="50">
                </a>
              </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="kodutoo2LP.html">Avaleht</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Tooted</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="teenused.php">Teenused</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="kontakt.php">Kontakt</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Otsi" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Otsi</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
       <div class="container mt-5 col-md-7 text-center">
       <h1>Minu oskused</h1>
       <?php
      $oskused = array("HTML","CSS","Bootstrap","PHP",);
      $varvid = array("primary","secondary","success","danger","warning","info", "dark");
      foreach ($oskused as $oskus) {
        $varv = $varvid[array_rand($varvid)];
        $protsent = rand(10, 100);
        echo '<div class="progress mb-3">';
        echo '<div class="progress-bar bg-' .$varv.'" role="progressbar" style="width:'.$protsent.'%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">' . $oskus . '</div>';
            echo '</div>';
      }
      ?>
      </div>
      <div class="container-fluid text-center mt-5 col-md-12">
        <h1>Meie töötajad</h1>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6">
        <?php
        $kataloog = 'Kasutajad';
        $asukoht=opendir($kataloog);
        $pildid = glob($kataloog . "/*.jpg");
        $domeen = "sinunimi.ee";
        foreach ($pildid as $pilt) {
          $töötaja_nimi = pathinfo($pilt, PATHINFO_FILENAME);
          $töötaja_nimi_suurtäht = ucfirst($töötaja_nimi);
          $e_post = $töötaja_nimi . "@" . $domeen;
          echo '<div class="col">';
          echo '<img src="' . $pilt . '" class="img-fluid" alt="Pilt">';
          echo '<div class="mt-2">';
          echo '<p>' . $töötaja_nimi_suurtäht . '</p>';
          echo '<p>' . $e_post . '</p>';
          echo '</div>';
          echo '</div>';
      }
        ?>
        </div>
      </div>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>