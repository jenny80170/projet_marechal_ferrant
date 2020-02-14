<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Maréchal Ferrant | <?= $page ?> </title>
</head>
<body>
  <!--Entête avec métier et nom prenom du client et la barre de navigation-->
  <header>
    <div class="container bg-primary mt-3 parameterHeader">
      <h1 class="text-dark text-center parameterHeader">Maréchal Ferrant</h1>
      <p class="text-dark text-center">Florian Foucart</p>
    </div>
    <div class="container parameterNavbar">
      <!--Barre de navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark parameterNavbar">
        <button class="navbar-toggler parameterButtonNav" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="index.php">Accueil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="description.php">Métier</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="devis.php">Devis</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="tarifs.php">Tarifs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="produits.php">Produits</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="galerie.php">Galerie</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="connexion.php">Connexion</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--Fin de barre de navigation et fin de l'entête-->
  </header>
