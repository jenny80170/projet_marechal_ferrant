<?php
// Insertion des paramétres de la base de données
require_once ROOT .'/models/confConnexionDbModel.php';
class Database {
  protected $db;
  public function __construct(){
    // Enregistrement des informations sur la base de données
    $dsn = 'mysql:dbname=' . DB . ';host=' . HOST;
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    // Connexion à la base de données
   $this->db = new PDO($dsn, USER, PASSWORD, $options);
  }
}
