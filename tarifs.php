<?php
//Variable permettant de changer le titre du head
$page = 'Tarifs';
// Entête du site avec barre de navigation
include 'header.php';
// Menu sur le coter gauche
include 'menu.php';
?>
<div class="flex-column col-md-9 col-sm-4">
  <!--Titre pour décrire le métier-->
  <h1 class="title_peru arount font-weight-bold mt-5 text-center mb-5">Tarifs</h1>
  <!--Fin du titre-->
  <p class="parameterP font-weight-bold text-center mb-5">
    Pour connaître les tarifs veuillez faire <br> une demande de devis et je vous recontacterais.
  </p>
  <h2 class="title_peru payment text-center font-weight-bold mb-5">Moyens de paiement</h2>
  <ul class="parameterContents text-center font-weight-bold mb-5">
    <li>Chèques</li>
    <li>Espéces</li>
    <li>Virements</li>
  </ul>
  <h2 class="title_peru info text-center font-weight-bold mb-5">Petite information importante</h2>
  <p class="parameterP text-center font-weight-bold mb-5">
    Les paiements par carte <br> ne sont pas accepter !!!
  </p>
</div>
<?php
// Pied de page du site
include 'footer.php';
?>
