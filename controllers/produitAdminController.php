<?php
require_once ROOT . '/models/produitAdminModel.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Création d'une nouvelle classe
$product = new Product();
// Lancement de la méthode pour pouvoir afficher les produits
$productList = $product->showProduct();
// Sécurisation de l'id
if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    // Récupération de l'id en GET
    $id = (int) $_GET['id'];
    // Hydratation de l'id
    $product->id = $id;
    // Lancement de la méthode pour pouvoir supprimer le produit
    $product->deleteProduct();
}
// Insertion de la page produitAminView
require_once ROOT . '/views/produitAdminView.php';
