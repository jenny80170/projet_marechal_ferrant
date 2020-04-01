<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
$index = trim(filter_input(INPUT_GET, 'index', FILTER_SANITIZE_STRING));
if(empty($index)){
    require_once ROOT . '/controllers/accueilController.php';    
}
else {
    $link = ROOT . '/controllers/'. $index. 'Controller.php';
    if(!file_exists($link)){
        header('location: index.php?index=accueil');
    }
    require_once $link;
}