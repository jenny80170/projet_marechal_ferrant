


<?php
//Variable permettant de changer le titre du head
$page = 'Produits';
// Insertion du header avec entête et barre de navigation
include_once ROOT .'/views/include/header.php';
// Insertion du menu sur le coter gauche
include_once ROOT .'/views/include/menu.php';
?>

<div class="col-md-9 contenu">
    <h1 class="title_chocolate h1_product">Mes produits</h1>
     <?php foreach ($productList as $products) { ?>
    <div class="row">
            <h2 class="col-12 text-primary mb-4 mt-5 h2_product"><?= $products['nameProduct']. '</h2><img class="col-md-3 col-xl-3 img_product img-fluid mb-4" src="../views/assets/img/' .$products['image']. '"/>' ?>
        <div class="col-md-9 col-xl-9 col-sm-10">
            <p class="parameterP p_product"><?= $products['descriptionProduct'] ?></p>
            <a href="index.php?index=insertProduitAdmin&id=<?= $products['id'] ?>" class="btn btn-success">Ajouter un produit</a>
<!--            <a href="index.php?index=admin&id=//<?= $products['id'] ?>" class="btn btn-success">Ajouter un produit</a>-->
            <a href="index.php?index=produitAdmin&id=<?= $products['id'] ?>" class="btn btn-success">Modifier un produit</a>
            <a href="index.php?index=admin&id=<?= $products['id'] ?>" class="btn btn-danger">Supprimer un produit</a>
    </div>
    </div>
        <?php } ?>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT .'/views/include/footer.php';
?>
