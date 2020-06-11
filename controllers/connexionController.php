<?php

// Regex pour la sécurité du pseudo et du mot de passe
$regexNamePassword = '/[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{1,12}+((-| ?)[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,11})$/';
// Regex pour le nom, le prénom et la ville
$regexName = '/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{1,12}+((-| ?)[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,11})$/';
// Regex pour le numéro de téléphone
$regexPhone = '/^0[3679]([0-9]{2}){4}$/';
// Regex pour l'adresse
$regexAddress = '/^([0-9]{1,4})(([ ]{0,})[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,}[ ]{0,}){0,}$/';
// Regex pour le code postale
$regexZipCode = '/^([0-9]{5})$/';
// Je défini mes variable à une chaine vide
$lastname = $firstname = $phone = $email = $address = $city = $zipCode = $pseudo = $password = $registerPseudo = $registerPassword = '';
// Je défini un tableau vide
$errors = [];
// Si il y a une requête en post
if (isset($_POST['registration'])) {
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    if (empty($lastname)) {
        $errors['lastname'] = 'Veuillez renseigner votre nom';
    } elseif (!preg_match($regexName, $lastname)) {
        $errors['lastname'] = 'Votre nom contient des caractères non autorisé !';
    }
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty($firstname)) {
        $errors['firstname'] = 'Veuillez saisir votre prénom';
    } elseif (!preg_match($regexName, $firstname)) {
        $errors['firstname'] = 'Votre prénom contient des caractère non autorisé !';
    }
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT));
    if (empty($phone)) {
        $errors['phone'] = 'Veuillez renseigner votre numéro de téléphone';
    } elseif (!preg_match($regexPhone, $phone)) {
        $errors['phone'] = 'Votre numéro n\'ai pas valide';
    }
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email)) {
        $errors['email'] = 'Veuillez renseigner votre adresse mail !';
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez renseigner un email valide';
    }
    $address = trim(filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING));
    if (empty($address)) {
        $errors['address'] = 'Veuillez renseigner votre adresse';
    }
    if (!preg_match($regexAddress, $address)) {
        $errors['address'] = 'Votre adresse contient des caractère non autorisé';
    }
    $city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING));
    if (empty($city)) {
        $errors['city'] = 'Veuillez saisir votre ville';
    } elseif (!preg_match($regexName, $city)) {
        $errors['city'] = 'Votre ville contient des caractère non autorisé !';
    }
    $zipCode = trim(filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_NUMBER_INT));
    if (empty($zipCode)) {
        $errors['zipCode'] = 'Veuillez renseigner votre numéro de téléphone';
    } elseif (!preg_match($regexZipCode, $zipCode)) {
        $errors['zipCode'] = 'Votre numéro n\'ai pas valide';
    }
    $registerPseudo = htmlentities(trim($_POST['registerPseudo']));
    $registerPassword = htmlentities(trim($_POST['registerPassword']));
    $verifyPassword = htmlentities(trim($_POST['verifyPassword']));
    if (empty($registerPseudo) || empty($registerPassword)) {
        $errors['suscribeStatus'] = 'Veuillez renseigner votre nom d\'utilisateur et votre mot de passe';
    }
    if($registerPassword != $verifyPassword){
     $errors['verifyPassword'] = 'Votre mot de passe n\'est pas identique';   
    }
    if (count($errors) == 0) {
        require_once ROOT . '/models/connexionModel.php';
        // Création d'une classe pour l'inscription
        $users = new connect();
        $users->lastname = $lastname;
        $users->firstname = $firstname;
        $users->address = $address;
        $users->phone = $phone;
        $users->mail = $email;
        $users->city = $city;
        $users->zipCode = $zipCode;
        $users->registerPseudo = $registerPseudo;
        $users->registerPassword = password_hash($registerPassword, PASSWORD_DEFAULT);
        $users->insertUsersConnect();
        // Génération aléatoire d'une clé
        $key = md5(microtime(TRUE) * 100000);
        require_once ROOT . '/vendor/autoload.php';
        $messageToSend = 'Pour activer votre compte veuillez cliquez sur le lien ci-dessous
            http://projetfinal.info/index.php?index=activation&log=' . urlencode($registerPseudo) . '&key=' . urlencode($key) . '
Cordialement, votre maréchal ferrant.
------------------------------------------------------------------------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
//Requiert le fichier "smtpParameters.php" contenant les informations de connexion (constantes)
        require_once ROOT . '/models/smtpParameters.php';
        $Name = 'Vous avez reçu un message via votre site Maréchal Ferrant';
        $mailbox = 'jennifer.malleret@outlook.fr';
        $header = 'De: ' . $Name . ' <' . $email . '>\r\n';
        $mail = mail('' . $mailbox, 'Marechal ferrant | Voici votre message', $messageToSend, $header);
        $registerMessage = '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
  <strong>Succés !</strong> ' . $registerPseudo . ' votre inscription à bien été enregistrée.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}
if (isset($_POST['connect'])) {
    $pseudo = htmlentities(trim($_POST['pseudo']));
    $password = htmlentities(trim($_POST['password']));
    if (empty($pseudo) || empty($password)) {
        $errors['connectStatus'] = 'Veuillez renseigner votre nom d\'utilisateur et votre mot de passe';
    }
    if (count($errors) == 0) {
        require_once ROOT . '/models/connexionModel.php';
        $connect = New connect();
        $pseudo = htmlentities(trim($_POST['pseudo']));
        $password = htmlentities(trim($_POST['password']));
        $dbUser = $connect->showUserConnect($pseudo);
        foreach ($dbUser as $row) {
            $dbId = $row['id'];
            $dbPseudo = $row['pseudo'];
            $dbPassword = $row['password'];
        }
        $verifyPassword = password_verify($password, $dbPassword);
        if ($verifyPassword = true) {
            $_SESSION['id'] = $dbId;
            $_SESSION['pseudo'] = $dbPseudo;
            var_dump($_SESSION);
            $message = '<p>Bienvenue' . $dbPseudo . ', Vous êtes maintenant connecté !</p>';
            var_dump($message);
        } else {
            $errors['pseudo'] && $errors['password'] = 'Votre nom d\'utilisateur ou votre mot de passe est incorrect';
        }
    }
}
require_once ROOT . '/views/connexionView.php';
