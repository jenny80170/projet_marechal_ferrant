<?php
// Insertion de la  page produitAdminModel
require_once ROOT . '/models/produitAdminModel.php';
// Début des fonctions pour afficher les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Fin des fonctions pour afficher les erreurs
// Initialisation des variables a chiane vide
$nameProduct = $image = $descriptionProduct = $reference = $id_serviceType = '';
// Initialisation d'un tableau vide
$errors = [];
// Création d'une nouvelle classe
$product = new Product();
// Si l'id en get n'est pas vide
if (!empty($_GET['id'])) {
    // Alors initialiser l'id en GET
    $id = (int) $_GET['id'];
    // Hydratation des valeurs
$product->id = $id;
$product->nameProduct = $nameProduct;
$product->image = $image;
$product->descriptionProduct = $descriptionProduct;
$product->reference = $reference;
// Lancement de la méthode pour pouvoir afficher les informations du produits
$productOne = $product->selectOneProduct();
}
// Si il y a une valeur post envoyer
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si le bouton modifier n'est pas null
    if (isset($_POST['modify'])) {
// Si mon tableau d'erreur est égale à 0
        if (count($errors) === 0) {
            // Alors inserer le fichier des requête SQL
            require_once ROOT . '/models/produitAdminModel.php';
            // Création d'une class nouvelle utilisateur
            $product = new Product();
            // Hydratation des valeurs
            $product->id = $_POST['id'];
            $product->nameProduct = $_POST['name'];
            $product->image = $_POST['img'];
            $product->descriptionProduct = $_POST['description'];
            $product->reference = $_POST['reference'];
            // Lancement de la méthode pour pouvoir modifier un produit
            $product->updateProduct();
        }
    }
    
    // Variable contenant le message de confirmation de modification
    $success = true;
}
// Insertion de la page produitUpdateAdminView
require_once ROOT . '/views/produitUpdateAdminView.php';
