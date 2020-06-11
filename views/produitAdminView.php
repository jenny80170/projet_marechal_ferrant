<?php
// Début de session
session_start();
//Variable permettant de changer le titre du head
$page = 'Produits';
// Insertion du header avec entête et barre de navigation
include_once ROOT .'/views/include/header.php'; 
if(isset($_GET['added'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>Votre produit a bien été enregistré.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>.';
}
?>
<!-- Insertion d'un container fluide dans une div -->
<div class="container-fluid">
    <?php
// Insertion du menu sur le coter gauche
include_once ROOT .'/views/include/menuAdmin.php';
if(!empty($success)){
     echo 'Votre produit a été supprimer avec succés';
 }
 else { ?>
<div class="col-md-9">
    <h1 class="title_chocolate h1_productAdmin">Mes produits</h1>
     <?php foreach ($productList as $products) { ?>
    <div class="row">
            <h2 class="col-12 text-primary mb-4 h2_product mt-5"><?= $products['nameProduct']. '</h2><img class="col-md-3 col-lg-3 img_product img-fluid mb-4" src="../views/assets/img/' .$products['image']. '"/>' ?>
                <div class="col-lg-8">
            <p class="parameterP p_product"><?= $products['descriptionProduct'] ?></p>
            <p class="float-right text-primary mr-2 ref_product"><?= $products['reference'] ?></p>
                </div>
    </div>
            <p>
                <br>
                <div class="row buttonProductAdmin">
            <a href="index.php?index=insertProduitAdmin&id=<?= $products['id'] ?>" class="btn btn-success col-lg-3 spaceProductAdmin">Ajouter un produit</a>
            <a href="index.php?index=produitUpdateAdmin&id=<?= $products['id'] ?>" class="btn btn-success col-lg-4 spaceProductAdmin">Modifier ce produit</a>
            <a href="index.php?index=produitAdmin&id=<?= $products['id'] ?>" class="btn btn-danger col-lg-4 spaceProductAdmin">Supprimer ce produit</a>
            </p>
                </div>
        <?php } ?>
</div>
</div>
</div>
<?php
 }
// Insertion du pied de page du site
include_once ROOT .'/views/include/footer.php';
?>
