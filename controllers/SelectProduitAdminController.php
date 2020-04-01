<?php //
require_once ROOT . '/models/produitsModel.php';
// Création d'un produit via une fonction dans une variable
$product = new Product();
$id = (int) $_GET['id'];
$product->id = $id;
$productOne = $product->selectOneProduct();
//Variable permettant de changer le titre du head
$page = 'test';
require_once ROOT . '/views/adminView.php';
