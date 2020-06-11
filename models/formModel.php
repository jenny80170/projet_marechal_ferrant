<?php 
// Insertion de la connexion à la base de données
require_once ROOT .'/models/connexionDbModel.php';
// Class permettant de stocker toutes mes variables
class form extends Database {
    public $lastname;
    public $firstname;
    public $phone;
    public $mail;
    public $city;
    public $zipCode;
    public $id_serviceType;
    public function insertUsers() {
          $sql = 'INSERT INTO `contact`(`lastname`, `firstname`, `phone`, `mail`, `city`, `zipCode`, `id_serviceType`) VALUES (:lastname, :firstname, :phone, :mail, :city, :zipCode, :id_serviceType)';
          $query = $this->db->prepare($sql);
          $query->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
          $query->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
          $query->bindValue(':phone', $this->phone, PDO::PARAM_INT);
          $query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
          $query->bindValue(':city', $this->city, PDO::PARAM_STR);
          $query->bindValue(':zipCode', $this->zipCode, PDO::PARAM_INT);
          $query->bindValue(':id_serviceType', $this->id_serviceType, PDO::PARAM_INT);
          $query->execute();
          return $this;
      }
}