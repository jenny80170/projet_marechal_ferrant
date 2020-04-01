<?php
require_once ROOT .'/models/connexionDbModel.php';
class Product extends Database {
      public $nameProduct;
      public $image;
      public $descriptionProduct;
      public $référence;
      public $id;
      public function showProduct() {
    $sql = 'SELECT `id`, `nameProduct`, `image`, `descriptionProduct`, `référence` FROM `products`';
    $productTable = $this->db->query($sql);
    $productList = $productTable->fetchAll(PDO::FETCH_ASSOC);
    return $productList;
  }
      public function insertProduct() {
          $sql = 'INSERT INTO `products`(`nameProduct`, `image`, `descriptionProduct`, `référence`) VALUES (:nameProduct, :imgProduct, :descriptionProduct, :référence)';
          $query = $this->db->prepare($sql);
          $query->bindValue(':nameProduct', $this->nameProduct, PDO::PARAM_STR);
          $query->bindValue(':descriptionProduct', $this->descriptionProduct, PDO::PARAM_STR);
          $query->bindValue(':imgProduct', $this->image, PDO::PARAM_STR);
          $query->bindValue(':référence', $this->référence, PDO::PARAM_STR);
          $query->execute();
          return $this;
      }
 public function updateProduct() {
     $sql = 'UPDATE `products` SET `nameProduct` = :nameProduct, `image` = :image, `descriptionProduct` = :descriptionProduct, `référence` = :référence WHERE `id` = :id';
     $query = $this->db->prepare($sql);
     $query->bindValue(':id', $this->id, PDO::PARAM_INT);
     $query->bindValue(':nameProduct', $this->nameProduct, PDO::PARAM_STR);
     $query->bindValue(':image', $this->image, PDO::PARAM_STR);
     $query->bindValue(':descriptionProduct', $this->descriptionProduct, PDO::PARAM_STR);
     $query->bindValue(':référence', $this->référence, PDO::PARAM_STR);
     $query->execute();
     return $this;
 }
 public function deleteProduct() {
     $sql  = 'DELETE FROM `products` WHERE `id` = :id';
     $query = $this->db->prepare($sql);
     $query->bindValue(':id', $this->id, PDO::PARAM_INT);
     $query->execute();
     return $this;
 }
 public function selectOneProduct() {
    $sql = 'SELECT `id`, `nameProduct`, `image`, `descriptionProduct`, `référence` FROM `products` WHERE `id` = :id';
    $query = $this->db->prepare($sql);
    $query->bindValue(':id', $this->id, PDO::PARAM_INT);
    if($query->execute()){
        $product_List = $query->fetch(PDO::FETCH_OBJ);
        return $product_List;
    }
 else {
    return false;    
    }
 }
  }