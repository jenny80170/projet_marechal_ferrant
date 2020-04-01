<?php
//Variable permettant de changer le titre du head
$page = 'Accueil';
// Insertion du header avec entête et barre de navigation
require_once ROOT. '/views/include/header.php'; ?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 require_once ROOT. '/views/include/menu.php';?>
<div class="contenu col-md-9">
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="quotePhone" onclick="window.location.href ='index.php?index=devis';">Demandez un devis</button>
  </div>
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="appointmentPhone" onclick="window.location.href = 'index.php?index=calendrier';">Prenez rendez-vous</button>
  </div>
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="pricesPhone" onclick="window.location.href = 'index.php?index=tarifs';">Demande de tarifs</button>
  </div>
  <!--Titre pour décrire le métier-->
  <div class="text-center contenuAcceuil">
    <h1 class="font-weight-bold h1_accueil">Présentation</h1>
    <img src="/views/assets/img/carte.jpg" alt="ma carte de visite" width="500" height="300" class="img-fluid parameterImg">
  <p class="parameterP font-weight-bold">
    Maréchal-Ferrant, bien plus qu'un métier, une passion.
    J'ai monté mon entreprise en 2013, mon savoir-faire est en constante évolution car je ne cesse de me former auprès de professionnels dans le milieu, de plus je travaille en étroite collaboration avec eux dans le soin des pathologies.<br><br>
    Je me déplace dans tout le département de la somme ainsi que les départements limitrophes pour ferrer, parer et soigner chevaux, poneys et ânes, et partager mon savoir-faire avec mes clients.<br><br>
    J'ai les capacités à analyser le cheval dans son ensemble, à connaître et reconnaître sa bonne ou mauvaise locomotion, à l'améliorer ou corriger ses défauts...dans un soucis de bien-être du cheval premièrement, et de performance dans un second temps.<br><br>
    Sachez que je travaille avant tout, pour le bien être de vos compagnons, dans le respect de l'animal.<br><br>
    Que vous soyez :
  </p>
    <ul class="parameterP font-weight-bold">
      - Particulier
      - Association
      - Centre Équestre
      - Haras
      - Éleveur (élevage d'équidés)
    </ul>
    <p class="parameterP font-weight-bold">
      N'hésitez pas à me contacter, je réponds rapidement à vos demandes.<br>
      Je vous souhaite une agréable visite !
    </p>
  </div>
  <!--Fin du titre-->
</div>
</div>
</div>
  <?php
  // Pied de page du site
  include_once ROOT .'/views/include/footer.php';
  ?>