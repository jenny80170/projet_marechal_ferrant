<?php
// Variable permettant de changer le titre du head
$page = 'Activation du compte';
// Insertion de l'entête
require_once ROOT .'/views/include/header.php';
// Insertion du menu
require_once ROOT .'/views/include/menu.php';
echo $message ?? '';
?>

<?php
// Insertion du pied de page
require_once ROOT .'/views/include/footer.php';
?>