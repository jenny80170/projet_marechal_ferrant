<?php
// Insertion de la page produitModel
require_once ROOT .'/models/produitsModel.php';
  $nameProduct = $image = $descriptionProduct = $reference = $id_serviceType = '';
// Création d'un produit via une fonction dans une variable
$product = new Product();
// Création de la variable contenant la fonction du model (initier par $this)
$productList = $product->showProduct();
require_once ROOT .'/views/produitsView.php';
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    if (isset($_POST['envoyer'])) {
//// Si mon tableau d'erreur est égale à 0
//        if (count($errors) === 0) {
//            // Alors inserer le fichier des requête SQL
//            require_once ROOT . '/models/produitsModel.php';
//            // Création d'une class nouvelle utilisateur
//            $product = new Product();
//            
//            $product->insertProduct();
//            $product->nameProduct = $nameProduct;
//            $product->image = $image;
//            $product->descriptionProduct = $descriptionProduct;
//            $product->deleteProduct();
//        }
//    }
//}
require_once ROOT . '/views/produitsView.php';
