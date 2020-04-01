<?php
$regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{1,12}+((-| ?)[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,11})$/";
$regexPhone = "/^0[3679]([0-9]{2}){4}$/";
$regexMessage = '/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/';
$regexZipCode = '/^([0-9]{5})$/';
$lastname = $firstname = $numberPhone = $email = $message = $selectType = $city = $zipCode = '';
$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
if (isset($_POST['validate'])) {
$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
if (empty($lastname)) {
  $errors['lastname'] = 'Veuillez renseigner votre nom';
}
elseif(!preg_match($regexName, $lastname)){
    $errors['lastname'] = 'Votre nom contient des caractères non autorisé !';
}
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
if(empty($firstname)){
$errors['firstname'] = 'Veuillez saisir votre prénom';
}
 elseif(!preg_match($regexName, $firstname)) {
    $errors['firstname'] = 'Votre prénom contient des caractère non autorisé !';
}
$numberPhone = trim(filter_input(INPUT_POST, 'numberPhone', FILTER_SANITIZE_NUMBER_INT));
if(empty($numberPhone)){
    $errors['numberPhone'] = 'Veuillez renseigner votre numéro de téléphone';
}
 elseif (!preg_match($regexPhone, $numberPhone)) {
    $errors['numberPhone'] = 'Votre numéro n\'ai pas valide';
}
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
if(empty($email)){
    $errors['email'] = 'Veuillez renseigner votre adresse mail !';
}
elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
  $errors['email'] = 'Veuillez renseigner un email valide';
}
$city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING));
if(empty($city)){
$errors['city'] = 'Veuillez saisir votre ville';
}
 elseif(!preg_match($regexName, $city)) {
    $errors['city'] = 'Votre ville contient des caractère non autorisé !';
}
$zipCode = trim(filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_NUMBER_INT));
if(empty($zipCode)){
    $errors['zipCode'] = 'Veuillez renseigner votre numéro de téléphone';
}
 elseif (!preg_match($regexZipCode, $zipCode)) {
    $errors['zipCode'] = 'Votre numéro n\'ai pas valide';
}
$selectType = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_NUMBER_INT));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
if(empty($message)){
    $errors['message'] = 'Veuillez saisir votre message';
}
elseif (!preg_match($regexMessage, $message)) {
    $errors['message'] = 'Votre message contient des caractère non autorisé !';
}
// Si mon tableau d'erreur est égale à 0
if(count($errors) == 0){
    // Alors inserer le fichier des requête SQL
    require_once ROOT .'/models/formModel.php';
    // Création d'une class nouvelle utilisateur
    $users = new form();
    $users->lastname = $lastname;
    $users->firstname = $firstname;
    $users->phone = $numberPhone;
    $users->mail = $email;
    $users->id_serviceType = $selectType;
    $users->city = $city;
    $users->zipCode = $zipCode;
    $users->insertUsers(); 
}
require_once ROOT .'/views/contactView.php';
}
}
