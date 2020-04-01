<?php
// Insertion de la page galerieModel
require_once ROOT . '/models/galerieModel.php';
// Création d'une nouvelle class
$galery = new Galery();
// Appel de la méthode showPictures
$galeryList = $galery->showPictures();
// Insertion de la page galerieView
require_once ROOT . '/views/galerieView.php';

