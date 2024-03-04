<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodutöö nr3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script data-name="TokenSigning" data-by="Web-eID extension"
    src="chrome-extension://ncibgoaomkmdpilpocfeponihegamlic/token-signing-page-script.js"></script>
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
      <div class="container">
      <form action="" method="GET">
        <div class="form-group row my-1">
            <div class="col-sm-2">Kogus:</div>
            <div class="col-sm-10">
                <input type="number" name="kogus">
            </div>
        </div>

        <div class="form-group row my-1">
            <div class="col-sm-2">Hind:</div>
            <div class="col-sm-10">
                <input type="number" name="hind">
            </div>
        </div>

        <div class="form-check my-1">
            <input class="form-check-input" type="checkbox" value="" name="robot">
            <div class="form-check-label">
                Ma ei ole robot
            </div>
        </div>

        <input type="submit" class="my-2" value="Arvuta">
    </form>
    <?php
    
    if (!isset($_GET['robot'])) {
        echo '<div class="alert alert-danger mt-3" role="alert">Palun kinnitage, et Te ei ole robot!</div>';
    
    } else { 
    if (isset($_GET['kogus']) && isset($_GET['hind'])) {
        $k1 = $_GET['kogus'];
        $h1 = $_GET['hind'];
    
    // kui kalkulatsiooni sisestatakse 0, siis kuvatakse veateade
    if ($k1 <= 0 or $h1 <= 0) {
        echo '<div class="alert alert-danger mt-3" role="alert">Palun sisestage nullist suurem number!</div>';
    } else {
    
        echo "Kogus: ".$k1."<br>";
        echo "Hind: ".$h1."<br>";
        echo "Kokku " .$k1*$h1;
      }
    }
}
?>
</div>
</body>
</html>