<?php
require_once ROOT .'/models/adminModel.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Création d'une nouvelle classe
$user = new UsersList();
// Lancement de la méthode pour pouvoir afficher les produits
$userList = $user->showUsers();
require_once ROOT .'/views/adminView.php';