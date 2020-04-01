<?php
$product = new Product();
// Création de la variable contenant la fonction du model (initier par $this)
$productList->id = trim(filter_input(INPUT_GET, 'index', FILTER_SANITIZE_INT));

$productList = $product->updateProduct();
require_once ROOT . '/views/produitAdminView.php';