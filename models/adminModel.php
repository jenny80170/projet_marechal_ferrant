<?php
// Insertion des paramétres de connexion à la base de donnée
require_once ROOT .'/models/connexionDbModel.php';
// Création de la classe
class UsersList extends Database {
    public $lastname;
    public $firstname;
    public $address;
    public $zipCode;
    public $city;
    public $mail;
    public $phone;
    public $pseudo;
    public function showUsers() {
        $sql  = 'SELECT `id`, `lastname`, `firstname`, `address`, `zipCode`, `city`, `mail`, `phone`, `pseudo` FROM `users`';
        $usersTable = $this->db->query($sql);
        $userList = $usersTable->fetchAll(PDO::FETCH_ASSOC);
        return $userList;
    }
}