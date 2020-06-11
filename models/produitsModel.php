<?php
require_once ROOT .'/models/connexionDbModel.php';
class Product extends Database {
      public $nameProduct;
      public $image;
      public $descriptionProduct;
      public $reference;
      public $id_serviceType;
      public $id;
      public function showProduct() {
    $sql = 'SELECT `id`, `nameProduct`, `image`, `descriptionProduct`, `reference` FROM `products`';
    $productTable = $this->db->query($sql);
    $productList = $productTable->fetchAll(PDO::FETCH_ASSOC);
    return $productList;
  }
      public function insertProduct() {
          $sql = 'INSERT INTO `products`(`nameProduct`, `image`, `descriptionProduct`, `reference`, `id_serviceType`) VALUES (:nameProduct, :imgProduct, :descriptionProduct, :reference, :id_serviceType)';
          $query = $this->db->prepare($sql);
          $query->bindValue(':nameProduct', $this->nameProduct, PDO::PARAM_STR);
          $query->bindValue(':descriptionProduct', $this->descriptionProduct, PDO::PARAM_STR);
          $query->bindValue(':imgProduct', $this->image, PDO::PARAM_STR);
          $query->bindValue(':reference', $this->reference, PDO::PARAM_STR);
          $query->bindValue(':id_serviceType', $this->id_serviceType, PDO::PARAM_INT);
          $query->execute();
          return $this;
      }
 public function updateProduct() {
     $sql = 'UPDATE `products` SET `nameProduct` = :nameProduct, `image` = :image, `descriptionProduct` = :descriptionProduct, `reference` = :reference WHERE `id` = :id';
     $query = $this->db->prepare($sql);
     $query->bindValue(':id', $this->id, PDO::PARAM_INT);
     $query->bindValue(':nameProduct', $this->nameProduct, PDO::PARAM_STR);
     $query->bindValue(':image', $this->image, PDO::PARAM_STR);
     $query->bindValue(':descriptionProduct', $this->descriptionProduct, PDO::PARAM_STR);
     $query->bindValue(':reference', $this->reference, PDO::PARAM_STR);
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
    $sql = 'SELECT `id`, `nameProduct`, `image`, `descriptionProduct`, `reference` FROM `products` WHERE `id` = :id';
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