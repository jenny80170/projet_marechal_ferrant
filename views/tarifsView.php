<?php
//Variable permettant de changer le titre du head
$page = 'Tarifs';
// Insertion du header avec entête et barre de navigation
include_once ROOT .'/views/include/header.php'; ?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT .'/views/include/menu.php';?>
<div class="col-md-9">
    <div class="text-center">
  <!--Titre pour décrire pour les tarifs-->
  <h1 class="title_peru rate font-weight-bold mt-5 mb-5">Tarifs</h1>
  <!--Fin du titre-->
  <p class="parameterP font-weight-bold mb-5 text-center">
    Pour connaître les tarifs veuillez faire <br> une demande de devis.
  </p>
  <h2 class="title_peru payment font-weight-bold mb-5">Moyens de paiement</h2>
  <ul class="parameterContents font-weight-bold mb-5">
    <li>Chèques</li>
    <li>Espéces</li>
    <li>Virements</li>
  </ul>
  <h2 class="title_peru info font-weight-bold mb-5">information importante</h2>
  <p class="parameterP font-weight-bold mb-5">
    Les paiements par carte <br> ne sont pas acceptés.
  </p>
    </div>
</div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT .'/views/include/footer.php';
?>
