<?php
// Début de session
session_start();
//Variable permettant de changer le titre du head
$page = 'Modification d\'image';
// Insertion du header avec entête et barre de navigation
include_once ROOT . '/views/include/header.php';
?>
<div class="container-fluid">
    <?php
    // Menu sur le coter gauche
    include_once ROOT . '/views/include/menu.php';
// Si la variable n'est pas vide 
    if (!empty($success)) {
        // Alors afficher le message
        echo 'Votre produit a été modifier avec succés';
    }
    // Sinon afficher le formulaire
    else {
        ?>
        <div class="col-md-9">
            <h1 class="justify-content-center mt-5">Modifier mon produit</h1>
            <form class="mt-5" action="index.php?index=produitUpdateAdmin" method="POST" novalidate>
                <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                    <label for="name">Entrez votre nom de produit</label>
                    <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="name" name="name" value="<?= $_POST['name'] ?? $productOne->nameProduct ?>">
                </div>
                <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                    <label for="description">Entrez votre description</label>
                    <textarea name="description" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="description" rows="8" cols="80"><?= $_POST['description'] ?? $productOne->descriptionProduct ?></textarea>
                </div>
                <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                    <label for="reference">Entrez votre référence</label>
                    <textarea name="reference" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="reference" rows="1" cols="8"><?= $_POST['reference'] ?? $productOne->reference ?></textarea>
                </div>
                <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                    <img src="/views/assets/img/ultraShieldSpray.jpg" class="img-fluid" width="100" />
                </div>
                <label for="img">Choisissez votre image</label>
                <input type="hidden" name="id" value="<?= $productOne->id ?>">
                <input type="file" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="img" name="img" value="<?= $_POST['img'] ?? $productOne->image ?>">
                <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
                    <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="modify" name="modify" value="Modifier">
                </div>
                <!--Fin du formulaire de contact-->
            </form>
        </div>
    </div>
    </div>
    <?php
}
// Insertion du pied de page
include ROOT . '/views/include/footer.php';
?>