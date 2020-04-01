<?php
// Alors inserer le fichier des requête SQL
            require_once ROOT . '/models/produitsModel.php';
              $product = new Product();
              if (!empty ($_GET['id'])) {
                  $id = (int) $_GET['id'];
                              $product->id = $id;
              }
             
         
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
// Si mon tableau d'erreur est égale à 0
        if (count($errors) == 0) {
            // J'ai mis la création du produit au dessus de l'hydratation du produit avec son ID, tu me diras si ça fonctionne :D
            $product->id = $_POST['id'];
            $product->nameProduct =  $_POST['lastname'];
            $product->image = $_POST['img'];
            $product->descriptionProduct = $_POST['description'];
            $product->updateProduct();
        }
}

            $productOne = $product->selectOneProduct();

require_once ROOT . '/views/produitAdminView.php';
