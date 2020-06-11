<?php
// Insertion du "model" de la page galerie
require_once ROOT . '/models/galerieAdminModel.php';
$picture = $blobData = '';
$galery = New Galery;
$pictureTable = $galery->showPicture();
if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    // Récupération de l'id en GET
    $id = (int) $_GET['id'];
    // Hydratation de l'id
    $galery->id = $id;
    // Lancement de la méthode pour pouvoir supprimer le produit
    $galery->deletePicture();
}
// Insertion de la "vue" de la page galerie
require_once ROOT . '/views/galerieAdminView.php';
