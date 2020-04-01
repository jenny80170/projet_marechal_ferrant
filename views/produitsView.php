<?php
//Variable permettant de changer le titre du head
$page = 'Produits';
// Insertion du header avec entête et barre de navigation
include_once ROOT .'/views/include/header.php'; ?>
<div class="container-fluid">
<?php
// Insertion du menu sur le coter gauche
include_once ROOT .'/views/include/menu.php';
?>
<div class="col-md-9 contenu">
    <h1 class="title_chocolate h1_product d-flex justify-content-center">Mes produits</h1>
     <?php foreach ($productList as $products) { ?>
    <div class="row">
            <h2 class="col-12 text-primary ml-3 mb-5 mt-5 h2_product"><?= $products['nameProduct']. '</h2><img class="col-md-3 col-xl-3 img_product img-fluid mb-4" src="/views/assets/img/' .$products['image']. '"/>' ?>
        <div class="col-md-9 col-xl-9 col-sm-10">
            <p class="parameterP p_product"><?= $products['descriptionProduct'] ?></p>
            <p class="float-right text-primary mr-2 ref_product"><?= $products['référence'] ?></p>
    </div>
    </div>
        <?php } ?>
</div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT .'/views/include/footer.php';
?>
