<?php
require_once ROOT .'/models/produitsModel.php';
// Création d'un produit via une fonction dans une variable
$product = new Product();
// Création de la variable contenant la fonction du model (initier par $this)
$productList = $product->showProduct();
if(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)){
    $id = (int) $_GET['id'];
        $product->id = $id;
        $product->deleteProduct();
        header('location:index.php?index=admin');
        exit();
}


require_once ROOT .'/views/adminView.php';