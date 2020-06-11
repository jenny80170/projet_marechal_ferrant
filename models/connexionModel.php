<?php
require_once ROOT .'/models/connexionDbModel.php';
class connect extends Database {
    public $pseudo;
    public $password;
    public $lastname;
    public $firstname;
    public $phone;
    public $address;
    public $email;
    public $city;
    public $zipcode;
    public $registerPseudo;
    public $registerPassword;
    public $dbPassword;
     public function showUserConnect($pseudo) {
        $sql = 'SELECT `id`, `pseudo`, `password` FROM `users` WHERE `pseudo` = :pseudo';
        $query = $this->db->prepare($sql);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();
        return $tableUsersConnect = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertUsersConnect() {
          $sql = 'INSERT INTO `users`(`lastname`, `firstname`, `address`, `phone`, `mail`, `city`, `zipCode`, `pseudo`, `password`) VALUES (:lastname, :firstname, :address, :phone, :mail, :city, :zipCode, :registerPseudo, :registerPassword)';
          $query = $this->db->prepare($sql);
          $query->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
          $query->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
          $query->bindValue(':address', $this->address, PDO::PARAM_STR);
          $query->bindValue(':phone', $this->phone, PDO::PARAM_INT);
          $query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
          $query->bindValue(':city', $this->city, PDO::PARAM_STR);
          $query->bindValue(':zipCode', $this->zipCode, PDO::PARAM_INT);
          $query->bindValue(':registerPseudo', $this->registerPseudo, PDO::PARAM_STR);
          $query->bindValue(':registerPassword', $this->registerPassword, PDO::PARAM_STR);
          $query->execute();
          return $this;
        }
}