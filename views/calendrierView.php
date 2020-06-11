<?php
// Insertion de la variable permettant de changer le titre du head
$page = 'Prise de rendez-vous';
// Insertion de l'entête de la page
require_once ROOT . '/views/include/header.php';
?>
<div class="container-fluid">
    <?php
// Insertion du menu sur le côter à gauche
    require_once ROOT . '/views/include/menu.php';
    ?>
    <div class="col-md-10">
    <div id="calendar"></div>
    </div>
</div>
</div>
<?php
// Insertion du pied de page
require_once ROOT . '/views/include/footer.php';
?>