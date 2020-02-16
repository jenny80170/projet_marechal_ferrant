<?php
//Variable permettant de changer le titre du head
$page = 'Produits';
// Entête du site avec barre de navigation
include 'header.php';
// Menu sur le coter gauche
include 'menu.php';
?>
<div class="flex-column col-md-9">
  <!--Titre pour décrire le métier-->
  <h1 class="title_chocolate font-weight-bold mt-5 ml-5">Description du métier</h1>
  <!--Fin du titre-->
  <p>
    <!--Image concernant le métier-->
    <img class="ml-5 mt-5" height="400" width="600" src="https://res.cloudinary.com/leetchi/image/upload/c_fill,f_auto,fl_lossy,g_center,h_520,q_80,w_715/v1540479275/89ca3e2d-e83d-452d-9687-a3e89079daca.jpg" alt="Card image cap">
  </p>
  <!--Fin de l'image-->
</div>
</div>
<?php
// Pied de page du site
include 'footer.php';
?>
