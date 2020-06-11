<?php
// Insertion de la connexion à la base de données
require_once ROOT .'/models/connexionDbModel.php';
class Activate extends Database {
    public $pseudo;
    public function showKey() {
        $sql = 'SELECT `activationkey` ,`active` FROM `users` WHERE pseudo = :pseudo ';
         // Récupération de la clé correspondant au $login dans la base de données
        $query = $this->db->prepare($sql);
    if ($query->execute(array(':pseudo' => $pseudo)) && $row = $query->fetch()) {
    $activationkeybdd = $row['activationkey'];    // Récupération de la clé
    $active = $row['active']; // récupération de la colonne active qui contiendra alors 0 ou 1
}
    }
   public function updateActive() {
       $sql = 'UPDATE `users` SET active = 1 WHERE pseudo = :pseudo ';
        // La requête qui va passer notre champ actif de 0 à 1
        $query = $this->db->prepare($sql);
        $query->bindValue(':pseudo', $pseudo);
        $query->execute();
   }
}