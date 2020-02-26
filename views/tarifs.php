<?php
//Variable permettant de changer le titre du head
$page = 'Tarifs';
// Insertion du header avec entête et barre de navigation
include '../views/include/header.php';
// Insertion du menu sur le coter gauche
include '../views/include/menu.php';
?>
<div class="col-md-9 col-sm-4">
  <!--Titre pour décrire le métier-->
  <h1 class="title_peru arount font-weight-bold mt-5 text-center mb-5">Tarifs</h1>
  <!--Fin du titre-->
  <p class="parameterP font-weight-bold text-center mb-5">
    Pour connaître les tarifs veuillez faire <br> une demande de devis.
  </p>
  <h2 class="title_peru payment text-center font-weight-bold mb-5">Moyens de paiement</h2>
  <ul class="parameterContents text-center font-weight-bold mb-5">
    <li>Chèques</li>
    <li>Espéces</li>
    <li>Virements</li>
  </ul>
  <h2 class="title_peru info text-center font-weight-bold mb-5">information importante</h2>
  <p class="parameterP text-center font-weight-bold mb-5">
    Les paiements par carte <br> ne sont pas acceptés.
  </p>
</div>
</div>
<?php
// Insertion du pied de page du site
include '../views/include/footer.php';
?>
