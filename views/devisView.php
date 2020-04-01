<?php
//Variable permettant de changer le titre du head
$page = 'Devis';
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; ?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menu.php';?>
    <?php
require_once ROOT .'/controllers/form_validationController.php';
?>
<div class="col-md-9">
    <!--Les moyens de contact du client (tél, mail et formulaire de contact)-->
    <h1 class="title_peru d-flex justify-content-center mb-5 mt-5 font-weight-bold titleQuotePhone title_quote">Demande de devis</h1>
    <p class="parameterP font-weight-bold p_quotePhone text-center">Vous voulez un devis ? demandez le via le formulaire ci-dessous</p>
    <!--Fin des moyens de contact-->
    <!--Début du formulaire de contact-->
 <?php 
 // Insertion du formulaire
 require_once ROOT .'/views/formView.php';
 ?>
</div>
<?php
// Insertion du pied de page du site
include ROOT .'/views/include/footer.php';
?>
</div>
