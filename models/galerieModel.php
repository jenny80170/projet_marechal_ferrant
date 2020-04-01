<?php
// Insertion du fichier avec la connexion à la base de donnée
require_once ROOT . '/models/connexionDbModel.php';
// Début de la class qui comportera toutes les variables et les méthodes
class galery extends Database {
    public $id;
    public $pictures;
// Méthode pour pouvoir afficher les images dans la page galerie
    public function showPictures() {
        $sql = 'SELECT `id`, `pictures` FROM `galery`';
        $galeryQuery = $this->db->query($sql);
        $galeryList = $galeryQuery->fetchAll(PDO::FETCH_ASSOC);
        return $galeryList;
    }
// Fin de la méthode pour afficher les photos
}
// Fin de la class galery
