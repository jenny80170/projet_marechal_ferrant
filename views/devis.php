<?php
//Variable permettant de changer le titre du head
$page = 'Devis';
// Insertion du header avec entête et barre de navigation
include '../views/include/header.php';
// Insertion du menu sur le coter gauche
include '../views/include/menu.php';
?>
<div class="col-xl-9 col-md-9">
    <!--Les moyens de contact du client (tél, mail et formulaire de contact)-->
    <h1 class="title_peru d-flex justify-content-center mt-5 mb-5 font-weight-bold titleQuotePhone title_quote">Demande de devis</h1>
    <p class="parameterP font-weight-bold p_quotePhone text-center">Vous voulez un devis ? demandez le via le formulaire ci-dessous</p>
    <!--Fin des moyens de contact-->
    <!--Début du formulaire de contact-->
    <form class="mt-5">
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="surname">Entrez votre nom</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="surname" name="surname" value="" placeholder="Exemple : Foucart" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="firstname">Entrez votre prénom</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="firstname" name="firstname" value="" placeholder="Exemple : Florian" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold font-weight-bold">
        <label for="numberPhone">Entrez votre numéro de téléphone</label>
        <input type="tel" class=" formContact inputFormContact mt-4 text-white font-weight-bold" id="numberPhone" name="numberPhone" value="" placeholder="Exemple : 06 ** ** ** **" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="email">Entrez votre adresse mail</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="email" name="email" value="" placeholder="Exemple : exemple@gmail.fr" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="demande">En quoi consiste votre demande</label>
        <select class="formContact inputFormContact mt-4 text-white font-weight-bold">
          <option class="formContact inputFormContact mt-4 text-white font-weight-bold">Prestations</option>
          <option>Devis</option>
          <option>Tarifs</option>
          <option>Contact</option>
          <option>Produits</option>
        </select>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="message">Entrez votre message</label>
        <textarea name="message" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="message" rows="8" cols="80" placeholder="Taper votre message" required></textarea>
      </div>
      <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
        <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="validate" name="validate" value="Envoyer">
      </div>
      <!--Fin du formulaire de contact-->
    </form>
  </div>
</div>
<?php
// Insertion du pied de page du site
include '../views/include/footer.php';
?>
