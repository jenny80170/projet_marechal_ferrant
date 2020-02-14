<?php
//Variable permettant de changer le titre du head
$page = 'Accueil';
// Entête du site avec barre de navigation
include 'header.php';
// Menu sur le coter gauche
include 'menu.php';
?>
<div class="flex-column col-md-9">
  <!--Titre pour décrire le métier-->
  <div class="h1_accueil">
    <h1 class="text-center font-weight-bold mb-5 mt-5">Présentation</h1>
  </div>
  <!--Fin du titre-->
  <div class="d-flex justify-content-center mb-5 mt-5">
    <img src="assets/img/carte.jpg" alt="ma carte de visite" height="300" width="500" class="img-fluid parameterImg">
  </div>
  <p class=" text-center parameterP font-weight-bold">
    Maréchal-Ferrant, bien plus qu'un métier, une passion.
    J'ai monté mon entreprise en 2013, mon savoir-faire est en constante évolution car je ne cesse de me former auprès de professionnels dans le milieu, de plus je travaille en étroite collaboration avec eux dans le soin des pathologies.<br><br>
    Je me déplace dans tout le département de la somme ainsi que les départements limitrophes pour ferrer, parer et soigner chevaux, poneys et ânes, et partager mon savoir-faire avec mes clients.<br><br>
    J'ai les capacités à analyser le cheval dans son ensemble, à connaître et reconnaître sa bonne ou mauvaise locomotion, à l'améliorer ou corriger ses défauts...dans un soucis de bien-être du cheval premièrement, et de performance dans un second temps.<br><br>
    Sachez que je travaille avant tout, pour le bien être de vos compagnons, dans le respect de l'animal.<br><br>
    Que vous soyez :
    <ul class="text-center parameterP font-weight-bold">
      - Particulier
      - Association
      - Centre Équestre
      - Haras
      - Éleveur (élevage d'équidés)
    </ul>
    <p class="text-center parameterP font-weight-bold">
      N'hésitez pas à me contacter, je réponds rapidement à vos demandes.<br>
      Je vous souhaite une agréable visite !
    </p>
  </div>
</div>
<?php
// Pied de page du site
include 'footer.php';
?>