<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 740px)" href="assets/css/styleMediaQuery.css" />
  <title>Maréchal Ferrant | <?= $page ?> </title>
</head>
<body>
  <!--Entête avec métier et nom prenom du client et la barre de navigation-->
  <header>
    <div class="container bg-primary parameterHeader">
      <h1 class="text-dark text-center parameterHeader">Maréchal Ferrant</h1>
      <p class="text-dark text-center">Florian Foucart</p>
    </div>
    <div class="container parameterNavbar" id="navPhone">
      <!--Barre de navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark parameterNavbar" id="navMenu">
        <button class="navbar-toggler parameterButtonNav" id="buttonToggle" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav m-auto">
            <li>
              <i id="phoneConnect" class="fa fa-user-circle-o" aria-hidden="true"><a class="nav-link font-weight-bold text-dark" href="connexion.php">Je me connecte</a></i>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="index.php">Accueil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" href="description.php">Métier</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" id="phoneQuote" href="devis.php">Devis</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-dark" id="phonePrices" href="tarifs.php">Tarifs</a>
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
