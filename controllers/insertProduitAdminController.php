<?php
// Alors inserer le fichier des requête SQL
            require_once ROOT . '/models/produitAdminModel.php';
            $errors = [];
              $product = new Product();
              if (!empty ($_GET['id'])) {
                  $id = (int) $_GET['id'];
                              $product->id = $id;
              }
             
         
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
// Si mon tableau d'erreur est égale à 0
        if (count($errors) == 0) {
            $product->nameProduct =  $_POST['name'];
            $product->image = $_POST['img'];
            $product->descriptionProduct = $_POST['description'];
            $product->reference = $_POST['reference'];
            $product->id_serviceType = '6';
            $product->insertProduct();
        }
        $success = true;
}
}
require_once ROOT . '/views/insertProduitAdminView.php';
