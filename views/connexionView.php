<?php
//Variable permettant de changer le titre du head
$page = 'Connexion';
// Insertion du header avec entête et barre de navigation
include_once ROOT . '/views/include/header.php';
// Insertion du menu sur le coter gauche
include_once ROOT . '/views/include/menu.php';
?>
<div class="col-xl-9 col-md-11 col-sm-12">
    <h1 class="title_chocolate font-weight-bold mt-5 ml-5">Connexion</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form class="mt-5" action="index.php?index=form_validation" method="POST" novalidate>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="name">Entrez votre pseudo</label>
                        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="name" name="name" placeholder="Exemple : floflo" required>
                        <span class="text-danger"> <?= ($errors['name']) ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="password">Entrez votre mot de passe</label>
                        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="password" name="password" required>
                        <span class="text-danger"> <?= $errors['password'] ?? '' ?> </span>
                    </div>
                    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="connect" name="connect" value="connexion">
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT . '/views/include/footer.php';
?>
