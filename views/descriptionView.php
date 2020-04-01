<?php
//Variable permettant de changer le titre du head
$page = 'Mon métier';
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; ?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menu.php';?>
<div class="col-md-9 contenu">
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="quotePhone" onclick="window.location.href = 'index.php?index=devis';">Demandez un devis</button>
  </div>
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="appointmentPhone" onclick="window.location.href = 'index.php?index=calendrier';">Prenez rendez-vous</button>
  </div>
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="pricesPhone" onclick="window.location.href = 'index.php?index=tarifs';">Demande de tarifs</button>
  </div>
    <div class="text-center contenuJob"
  <!--Titre pour décrire le métier-->
  <h1 class="h1_job font-weight-bold">Description du métier</h1>
  <!--Fin du titre-->
    <!--Image concernant le métier-->
    <img class="img_job img-fluid" height="300" width="500" src="https://res.cloudinary.com/leetchi/image/upload/c_fill,f_auto,fl_lossy,g_center,h_520,q_80,w_715/v1540479275/89ca3e2d-e83d-452d-9687-a3e89079daca.jpg" alt="description image du métier de maréchal ferrant">
  <!--Fin de l'image-->
  <p class="parameterP">
    Le maréchal-ferrant participe au bon entretien de l’appareil locomoteur du cheval, par un travail approprié sur la boîte cornée. Par son travail il protège les pieds du cheval, il corrige ou pallie les défauts de conformation, il contribue aux performances sportives ou professionnelles du cheval, il soigne certaines pathologies.<br><br>
    L’objectif premier du maréchal est de permettre au cheval de s’équilibrer dans sa locomotion, en minimisant au maximum les contraintes sur ses pieds.<br><br>
    Il doit posséder de solides connaissances en anatomie, en biomécanique, en forge et en pathologie. Il doit également connaître et comprendre les exigences qu’imposent les différentes disciplines équestres, de loisir ou de compétition.<br><br>
    Les qualités requises sont le sens de l’observation, la réflexion et l’attention.<br><br>
    Un maréchal-ferrant peut être salarié dans un haras ou un centre équestre, mais il peut également être itinérant à son compte.<br><br>
    Il doit alors avoir un excellent contact avec sa clientèle. Il se déplace dans les clubs hippiques, dans les centres équestres, dans les cirques ou chez des propriétaires privés.<br><br>
    À noter : maréchal-ferrant est un métier très physique. Les gestes sont fatigants et le mal de dos est fréquent dans la profession. Par ailleurs, un cheval n’est pas toujours facile à amadouer, même pour un professionnel !<br><br>
    Plusieurs diplômes professionnels permettent de devenir maréchal-ferrant. Ces diplômes peuvent se préparer en formation initiale, en apprentissage ou en formation continue :<br>
  </p>
  <ul>
    <li>CAP agricole maréchal-ferrant</li>
    <li>BTM maréchal-ferrant</li>
  </ul>
  <p class="parameterP">pour des responsabilités d'encadrement et de formation ou se spécialiser dans l'orthopédie équine.</p>
</div>
</div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT .'/views/include/footer.php';
?>
