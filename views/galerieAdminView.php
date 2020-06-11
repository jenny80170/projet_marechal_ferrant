<?php
//Variable permettant de changer le titre du head
$page = 'Produits';
// Insertion du header avec entête et barre de navigation
include_once ROOT . '/views/include/header.php'; ?>
<div class="container-fluid">
<?php
// Insertion du menu sur le coter gauche
include_once ROOT . '/views/include/menuAdmin.php';
?>
<div class="col-md-9">
    <h1 class="mt-5 h1_galery_admin">Ma galerie photos</h1>
<?php foreach ($pictureTable as $picture) { ?>
<div class="row">
    <img class="col-md-6 img-fluid mt-5 mb-4 img_galery_admin" src="/views/assets/img/galery/<?= $picture['pictures'] ?>"/>
    <div class="col-md-6 button_galery_admin">
    <a href="index.php?index=ajoutImage&id=<?= $picture['id'] ?>" class="btn btn-success">Ajouter une photo</a>
            <a href="index.php?index=galerieAdmin&id=<?= $picture['id'] ?>" class="btn btn-danger buttonProductAdmin">Supprimer cette photo</a>
    </div>
    </div>
                <?php } ?>
</div>
</div>
</div>
<?php
require_once ROOT . '/views/include/footer.php';
?>
