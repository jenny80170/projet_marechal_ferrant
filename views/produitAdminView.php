<?php 
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; 
?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menu.php';
 ?>
<form class="mt-5" action="index.php?index=produitAdmin" method="POST" novalidate>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="lastname">Entrez votre nom de produit</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? $productOne->nameProduct ?>">
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="description">Entrez votre description</label>
      <textarea name="description" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="description" rows="8" cols="80"><?= $_POST['description'] ?? $productOne->descriptionProduct ?></textarea>
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <img src="/views/assets/img/ultraShieldSpray.jpg" class="img-fluid" width="100" />
    </div>
      <label for="img">Choisissez votre image</label>
      <input type="hidden" name="id" value="<?= $productOne->id ?>">
   </div>
      <input type="file" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="img" name="img" value="<?= $_POST['img'] ?? $productOne->image ?>">
    <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
      <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="envoyer" name="envoyer" value="Envoyer">
    </div>
    <!--Fin du formulaire de contact-->
  </form>
</div>
<?php 
include ROOT .'/views/include/footer.php';
?>