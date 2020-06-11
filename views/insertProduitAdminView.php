<?php 
//Variable permettant de changer le titre du head
$page = 'Ajout d\'image';
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; 
?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menuAdmin.php';
 if(!empty($success)){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>Votre produit a bien été enregistré.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 } else { ?>
    <div class="col-md-9">
        <i class="fa fa-arrow-circle-left backArrow" aria-hidden="true"></i>
        <div class="justify-content-center">
        <h1 class="h1_productInsertAdmin">Mon produit</h1>
     <form class="mt-5" action="index.php?index=insertProduitAdmin" method="POST" novalidate>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="name">Entrez votre nom de produit</label>
      <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="name" name="name">
    </div>
    <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
        <label for="description" class="descriptionProduct">Entrez votre description</label>
      <textarea name="description" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="description" rows="8" cols="80"></textarea>
    </div>
         <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
             <label for="reference">Entrez votre référence</label>
      <textarea name="reference" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="reference" rows="1" cols="8"></textarea>
    </div>
         <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="img">Choisissez votre image</label>
      <input type="file" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="img" name="img">
         </div>
      <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
      <input type="submit" class="formContact inputFormContact addPictures mb-3 mt-3 text-white font-weight-bold" id="add" name="add" value="Ajouter">
    </div>
    <!--Fin du formulaire de contact-->
  </form>
        </div>
    </div>
</div>
</div>
<?php 
 }
include ROOT .'/views/include/footer.php';
?>