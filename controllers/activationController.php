<?php
require_once ROOT .'/models/activationModel.php';
// récupère la taille de la clé
$keylength = strlen($_GET['key']);
// Si les variables ne sont pas définies dans l'url ou que la clé n'est pas de 32 charactères, renvoie vers la page 'index.php'
if (empty($_GET['log']) || empty($_GET['key']) || $keylength < 32 || $keylength > 32) {
    header('location:index.php');
    exit();
}
// Récupération des variables nécessaires à l'activation
$pseudo = $_GET['log'];
$activationkey = $_GET['key'];
// On teste la valeur de la variable $active récupérée dans la BDD
if ($active == '1') {
    // Si le compte est déjà actif on prévient
    $message = 'Votre compte est déjà activé !';
} // Si ce n'est pas le cas on passe aux comparaisons
else {
    if ($activationkey == $activationkeybdd) // On compare nos deux clés
    {
        // Si elles correspondent on active le compte !
        $message = 'Votre compte a bien été activé !';
    }
    // Si les deux clés sont différentes l'utilisateur est redirigé vers la page 'index.php'
    else {
        header('location:index.php');
        exit();
    }
    $activation = New active();
    $activation->pseudo = $pseudo;
    $activation->showKey();
    $activation->updateActive();
}
require_once ROOT .'/views/activationView.php';