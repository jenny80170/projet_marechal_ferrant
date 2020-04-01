<?php 
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; 
?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menu.php';
 if(!empty($success)){
     echo 'Votre produit a été ajouter avec succés';
 }
 else { ?>
     <form class="mt-5" action="index.php?index=insertProduitAdmin" method="POST" novalidate>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="lastname">Entrez votre nom de produit</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="lastname" name="lastname">
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="description">Entrez votre description</label>
      <textarea name="description" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="description" rows="8" cols="80"></textarea>
    </div>
      <label for="img">Choisissez votre image</label>
   </div>
      <input type="file" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="img" name="img">
    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
      <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="envoyer" name="envoyer" value="Ajouter">
    </div>
    <!--Fin du formulaire de contact-->
  </form>
</div>
<?php 
 }
include ROOT .'/views/include/footer.php';
?>