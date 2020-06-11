<?php
// Insertion des paramétres de la base de donnée
require_once ROOT . '/models/connexionDbModel.php';
// Création de la class galery
class Galery extends Database {
    public $pictures;
    public $imgExtension;
    // Création de la méthode pour pouvoir afficher les images dans la partie galery
    public function showPicture() {
        // Requête SQL pour pouvoir afficher les images
        $sql  = 'SELECT `id`, `pictures` FROM `galery`';
        // Requête query
        $query = $this->db->query($sql);
        // Tableau associatif pour pouvoir afficher les images à l'aide d'un foreach
        $pictureTable = $query->fetchAll(PDO::FETCH_ASSOC);
        // On retourne le tableau
        return $pictureTable;
    }
    public function insertPicture() {
        $sql = 'INSERT INTO `galery` (`pictures`) VALUES (:pictures)';
        $query = $this->db->prepare($sql);
        $query->bindValue(':pictures', $this->pictures, PDO::PARAM_LOB);
        $query->execute();
        return $this;
    }
    public function updatePicture() {
        
    }
    public function deletePicture() {
        $sql = 'DELETE FROM `galery` WHERE `id` = :id';
        $query = $this->db->prepare($sql);
        $query->bindValue(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
        return $this;
    }
    public function selectOnePicture() {
    $sql = 'SELECT `id`, `pictures FROM `galery` WHERE `id` = :id';
    $query = $this->db->prepare($sql);
    $query->bindValue(':id', $this->id, PDO::PARAM_INT);
    if($query->execute()){
        $galery_list = $query->fetch(PDO::FETCH_OBJ);
        return $galery_list;
    }
 else {
    return false;    
    }
 }
}
