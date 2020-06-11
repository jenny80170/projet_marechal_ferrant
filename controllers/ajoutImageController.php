<?php
// Insertion du model pour la partie galery
require_once ROOT . '/models/galerieAdminModel.php';
$id = $pictures = $message = $imgExtension  = '';
$errors = [];
////extensions autorisées
//        
//if (isset($_POST['pictureAdd'])) {
////Si le champ ajouter un fichier n'est pas vide
//
//if (isset($_FILES['img'])) {
//
//$fille = $_FILES['img'];
//
////Nom du fichier
//
//$fileName = $_FILES['img']['name'];
//
////lieu de stockage temporaire du fichier
//
//$fileTmpName = $_FILES['img']['tmp_name'];
//
////taille du fichier
//
//$fileSize = $_FILES['img']['size'];
//
////erreur, retourne un int (https://www.php.net/manual/fr/features.file-upload.errors.php)
//
//$fileError = $_FILES['img']['error'];
//
////type de fichier
//
//$fileType = $_FILES['img']['type'];
//
//$fileExt = explode('.', $fileName);
//
//$fileActualExt = strtolower(end($fileExt));
//
////extensions autorisées
//
//        $allowed = array('jpg', 'jpeg', 'png', 'gif');
//
////si l'extension est bonne
//
//if (in_array($fileActualExt, $allowed)) {
//
////si il n'y a pas derreurs
//
//if ($fileError === 0) {
//
////si la taille du fichier est inférieure à 20000000 octets / 20 méga
//
//if ($fileSize < 2000000) {
//
////option de desination définie dans 'sqlfile.php'
//
//$target_path = Settings::$uploadFolder;
//
//$target_path = $target_path . '_' . basename($_FILES['img']['name']);
//
////si le fichié est correctement uploadé dans le dossier
//
//if (move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
//
//$compositionAdded = '';
//
//} else {
//
//$compositionAdded = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//
//<p>Une erreur c\'est produite durant l\'upload du fichier "' . basename($_FILES['img']['name']) . '" merci de réessayer.</p>
//
//<button type="button" class="close" data-dismiss="alert" aria-label="Close">
//
//<span aria-hidden="true">&times;</span>
//
//</button>
//
//</div>';
//
//}
//
//} else {
//
//$errors['img'] = 'La taille de votre fichier est trop grande.';
//
//}
//
//} else {
//
//$errors['img'] = 'Une erreur c\'est produite durant l\'upload de votre fichier merci de réessayer.';
//
//}
//
//} else {
//
//$errors['img'] = 'Le format de votre fichier n\'est pas valide.';
//
//}
//
//}
//}
////Si le message de validation du fichier n'est pas défini
//
//if (!isset($compositionAdded)) {
//
//$errors['img'] = 'Veuillez ajouter un fichier.';
//
//}
if (isset($_POST['pictureAdd'])) {
    var_dump($_FILES);
    require_once ROOT .'/models/sqlfile.php';
    $target_path = Settings::$uploadFolder;
//Si le champ ajouter un fichier n'est pas vide
    if (isset($_FILES['img'])) {
        $img = $_FILES['img'];
//Nom du fichier
        $imgName = $_FILES['img']['name'];
//lieu de stockage temporaire du fichier
        $imgTmpName = $_FILES['img']['tmp_name'];
//taille du fichier
        $imgSize = $_FILES['img']['size'];
//erreur, retourne un int (https://www.php.net/manual/fr/features.file-upload.errors.php)
        $imgError = $_FILES['img']['error'];
//type de fichier
        $imgType = $_FILES['img']['type'];
        // Recuperation de l'extension du fichier
    $extension  = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $imgExtension = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
        $imgExt = explode('.', $imgName);
                    // On renomme le fichier
            $imgName = md5(uniqid()) .'.'. $extension;
//si l'extension est bonne
        if (in_array($imgExtension, $allowedExtension)) {
//si il n'y a pas derreurs
            if ($imgError === 0) {
                    $maxSize = 2000000;
//si la taille du fichier est inférieure à 20000000 octets / 20 méga
                if ($imgSize <= $maxSize) {
//si le fichié est correctement uploadé dans le dossier
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
                    } else {
                        $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<p>Une erreur c\'est produite durant l\'importation de l\'image"' . basename($_FILES['img']['name']) . '" merci de réessayer.</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                    }
                } else {
                    $errors['img'] = 'La taille de votre image est trop grande.';
                }
            } else {
                $errors['img'] = 'Une erreur c\'est produite durant l\'upload de votre image merci de réessayer.';
            }
        } else {
            $errors['img'] = 'Le format de votre image n\'est pas valide.';
        }
    }
//Si le message de validation du fichier n'est pas défini
    if (!isset($imgAdded)) {
        $errors['img'] = 'Veuillez ajouter une image.';
    }
}
$galery = New Galery;
$galery->pictures = $pictures;
$galery->insertPicture();
// Insertion de la vue de la page d'ajout d'image
require_once ROOT . '/views/ajoutImageView.php';

