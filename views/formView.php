<?php 
//Variable permettant de changer le titre du head
$page = 'Devis';
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; ?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menu.php';
 ?>
<form class="mt-5" action="index.php?index=form_validation" method="POST" novalidate>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="lastname">Entrez votre nom</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="lastname" name="lastname" placeholder="Exemple : Foucart" required>
      <span class="text-danger"> <?= ($errors['lastname']) ?? '' ?> </span>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="firstname">Entrez votre prénom</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="firstname" name="firstname" placeholder="Exemple : Florian" required>
      <span class="text-danger"> <?= $errors['firstname'] ?? '' ?> </span>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold font-weight-bold">
      <label for="numberPhone">Entrez votre numéro de téléphone</label>
      <input type="tel" class=" formContact inputFormContact mt-4 text-white font-weight-bold" id="numberPhone" name="numberPhone" placeholder="Exemple : 06 ** ** ** **" required>
      <span class="text-danger"> <?= $errors['numberPhone'] ?? '' ?> </span>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="email">Entrez votre adresse mail</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="email" name="email" placeholder="Exemple : exemple@gmail.fr" required>
    <span class="text-danger"> <?= $errors['email'] ?? '' ?> </span>
    </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="city">Entrez votre ville</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="city" name="city" placeholder="Exemple : Amiens" required>
    <span class="text-danger"> <?= $errors['city'] ?? '' ?> </span>
    </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="zipCode">Entrez votre code postale</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="zipCode" name="zipCode" placeholder="Exemple : 80000" required>
    <span class="text-danger"> <?= $errors['zipCode'] ?? '' ?> </span>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="service">En quoi consiste votre demande</label>
      <select class="formContact inputFormContact mt-4 text-white font-weight-bold" name="service">
          <option class="formContact inputFormContact mt-4 text-white font-weight-bold" value="2">Prestations</option>
          <option value="3">Devis</option>
          <option value="4">Tarifs</option>
          <option value="5">Contact</option>
          <option value="6">Produits</option>
      </select>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="message">Entrez votre message</label>
      <textarea name="message" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="message" rows="8" cols="80" placeholder="Taper votre message" required></textarea>
    <span class="text-danger"> <?= $errors['message'] ?? '' ?> </span>
    </div>
    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
      <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="validate" name="validate" value="Envoyer">
    </div>
    <!--Fin du formulaire de contact-->
  </form>
</div>