<?php
// Insertion de la page produitModel
require_once ROOT .'/models/produitsModel.php';
// Création d'un produit via une fonction dans une variable
$product = new Product();
// Création de la variable contenant la fonction du model (initier par $this)
$productList = $product->showProduct();
require_once ROOT .'/views/produitsView.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['envoyer'])) {
// Si mon tableau d'erreur est égale à 0
        if (count($errors) === 0) {
            // Alors inserer le fichier des requête SQL
            require_once ROOT . '/models/textModel.php';
            // Création d'une class nouvelle utilisateur
            $product = new Product();
            $product->nameProduct = 'produit';
            $product->image = 'image';
            $product->descriptionProduct = 'description';
            $product->référence = 'référence';
            $product->insertProduct();
            $product->nameProduct = 'produit';
            $product->image = 'image';
            $product->descriptionProduct = 'description';
            $product->deleteProduct();
        }
    }
}
require_once ROOT . '/views/produitsView.php';
