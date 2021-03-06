<?php
//Variable permettant de changer le titre du head
$page = 'Devis';
// Insertion du header avec entête et barre de navigation
include_once ROOT .'/views/include/header.php';
// Insertion du menu sur le coter gauche
include_once ROOT .'/views/include/menu.php';
?>
<div class="col-xl-9 col-md-9">
    <!--Les moyens de contact du client (tél, mail et formulaire de contact)-->
    <h1 class="title_peru d-flex justify-content-center mt-5 mb-5 font-weight-bold titleQuotePhone title_quote">Demande d'informations</h1>
    <p class="parameterP font-weight-bold p_quotePhone text-center">Vous voulez des informations sur le produit, demandez le via le formulaire ci-dessous</p>
    <!--Fin des moyens de contact-->
    <!--Début du formulaire de contact-->
    <form class="mt-5">
        <div>
            <h1 name="nameProduct" id="nameProduct"><?= $nameProduct ?></h1>
        </div>
        <div>
            <p name="descriptionProduct" id="descriptionProduct"><?= $descProduct ?></p>
        </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="surname">Entrez votre nom</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="surname" name="surname" placeholder="Exemple : Foucart" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="firstname">Entrez votre prénom</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="firstname" name="firstname" placeholder="Exemple : Florian" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold font-weight-bold">
        <label for="numberPhone">Entrez votre numéro de téléphone</label>
        <input type="tel" class=" formContact inputFormContact mt-4 text-white font-weight-bold" id="numberPhone" name="numberPhone" placeholder="Exemple : 06 ** ** ** **" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="email">Entrez votre adresse mail</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="email" name="email" placeholder="Exemple : exemple@gmail.fr" required>
      </div>
      <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="demande">En quoi consiste votre demande</label>
        <select name="selectType" id="selectType" class="formContact inputFormContact mt-4 text-white font-weight-bold">
            <option value="2" class="formContact inputFormContact mt-4 text-white font-weight-bold">Prestations</option>
            <option value="3">Devis</option>
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
include_once ROOT .'/views/include/footer.php';
?>
