<?php
//Variable permettant de changer le titre du head
$page = 'Galerie';
// Insertion du header avec entête et barre de navigation
include_once ROOT . '/views/include/header.php'; ?>
<div class="container-fluid">
<?php
// Insertion du menu sur le coter gauche
include_once ROOT . '/views/include/menu.php';
?>
<div class="contenu col-md-9">
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="quotePhone" onclick="window.location.href = 'index.php?index=devis';">Demandez un devis</button>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="appointmentPhone" onclick="window.location.href = 'index.php?index=calendrier';">Prenez rendez-vous</button>
    </div>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="pricesPhone" onclick="window.location.href = 'index.php?index=tarifs';">Demande de tarifs</button>
    </div>
    <h1 class="mt-5 mb-4 h1_galery">Ma galerie photos</h1>
        <?php
    // Début de la boucle foreach pour pouvoir afficher les images
    foreach ($galeryList as $picture) {
        ?>
        <!-- echo de la colone picture pour pouvoir afficher mes image -->
        <img class="col-md-3 img-fluid mt-5 mb-4 img_galery p-0" src="/views/assets/img/galery/<?= $picture['pictures'] ?>"/>
        <!-- Fin de la boucle foreach -->
    <?php } ?>
</div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT . '/views/include/footer.php';
?>