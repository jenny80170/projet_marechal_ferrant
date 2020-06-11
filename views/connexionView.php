<?php
//Variable permettant de changer le titre du head
$page = 'Connexion';
// Insertion du header avec entête et barre de navigation
include_once ROOT . '/views/include/header.php';
echo $registerMessage ?? ''; ?>
<div class="container-fluid">
<?php
// Insertion du menu sur le coter gauche
include_once ROOT . '/views/include/menu.php';
?>
<div class="col-md-9">
    <h1 class="justify-content-center h1_connect">Me connecter ou m'inscrire</h1>
    <h2 class="title_chocolate font-weight-bold mt-5 ml-5">Connexion</h2>
    <span class="red"><?= $errors['connectStatus'] ?? '' ?></span>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form class="form_connect" action="index.php?index=admin" method="POST" novalidate>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="pseudo">Entrez votre pseudo</label>
                        <input value="<?= $_POST['pseudo'] ?? '' ?>" type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="pseudo" name="pseudo" placeholder="Exemple : floflo" required>
                        <span class="red"> <?= ($errors['pseudo']) ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="password">Entrez votre mot de passe</label>
                        <input value="<?= $_POST['password'] ?? '' ?>" type="password" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="password" name="password" required>
                        <span class="red"> <?= $errors['password'] ?? '' ?> </span>
                    </div>
                    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="connect" name="connect" value="connexion">
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <h2 class="title_chocolate font-weight-bold">Inscription</h2>
                <span class="red"><?= $errors['suscribeStatus'] ?? '' ?></span>
                <form class="mt-5" action="index.php?index=connexion" method="POST" novalidate>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="lastname">Entrez votre nom</label>
                        <input value='<?= $_POST['lastname'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="lastname" name="lastname" placeholder="Exemple : Foucart" required>
                        <span class="red"> <?= ($errors['lastname']) ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="firstname">Entrez votre prénom</label>
                        <input value='<?= $_POST['firstname'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="firstname" name="firstname" placeholder="Exemple : Florian" required>
                        <span class="red"> <?= $errors['firstname'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold font-weight-bold">
                        <label for="phone">Entrez votre numéro de téléphone</label>
                        <input value='<?= $_POST['phone'] ?? '' ?>' type="tel" class=" formContact inputFormContact mt-4 text-white font-weight-bold" id="phone" name="phone" placeholder="Exemple : 06 ** ** ** **" required>
                        <span class="red"> <?= $errors['phone'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="email">Entrez votre adresse mail</label>
                        <input value='<?= $_POST['email'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="email" name="email" placeholder="Exemple : exemple@gmail.fr" required>
                        <span class="red"> <?= $errors['email'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="address">Entrez votre addresse</label>
                        <input value='<?= $_POST['address'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="address" name="address" required>
                        <span class="red"> <?= $errors['address'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="zipCode">Entrez votre code postale</label>
                        <input value='<?= $_POST['zipCode'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="zipCode" name="zipCode" placeholder="Exemple : 80000" required>
                        <span class="red"> <?= $errors['zipCode'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="city">Entrez votre ville</label>
                        <input value='<?= $_POST['city'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="city" name="city" placeholder="Exemple : Amiens" required>
                        <span class="red"> <?= $errors['city'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="registerPseudo">Entrez votre pseudo</label>
                        <input value='<?= $_POST['registerPseudo'] ?? '' ?>' type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="registerPseudo" name="registerPseudo" placeholder="toto" required>
                        <span class="red"> <?= $errors['registerPseudo'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="registerPassword">Entrez votre mot de passe</label>
                        <input value='<?= $_POST['registerPassword'] ?? '' ?>' type="password" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="registerPassword" name="registerPassword" required>
                        <span class="red"> <?= $errors['registerPassword'] ?? '' ?> </span>
                    </div>
                    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <label for="verifyPassword">Entrez à nouveau votre mot de passe</label>
                        <input value='<?= $_POST['verifyPassword'] ?? '' ?>' type="password" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="verifyPassword" name="verifyPassword" required>
                        <span class="red"> <?= $errors['verifyPassword'] ?? '' ?> </span>
                    </div>
                    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
                        <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="registration" name="registration" value="s'inscrire">
                    </div>
</form>
        </div>
    </div>
</div>
</div>
<?php
// Insertion du pied de page du site
include_once ROOT . '/views/include/footer.php';
?>
</div>