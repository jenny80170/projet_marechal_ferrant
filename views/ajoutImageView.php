<?php 
// Variable permettant de changer le titre du head
$page = 'Ajout d\'image';
// Insertion du header avec entête et barre de navigation
include_once ROOT. '/views/include/header.php'; 
?>
<div class="container-fluid">
<?php // Menu sur le coter gauche
 include_once ROOT. '/views/include/menuAdmin.php';
 if(!empty($success)){
     echo 'Votre produit a été ajouter avec succés';
 }
 else { ?>
    <div class="col-md-9">
        <h1 class="justify-content-center mt-5">Mon image</h1>
     <form class="mt-5" action="index.php?index=ajoutImage#" method="POST" enctype="multipart/form-­data" novalidate>
         <div class="form-group d-flex justify-content-center colorSandyBrown font-weight-bold">
      <label for="img">Choisissez votre image</label>
      <input type="file" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="img" name="img">
         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
         </div>
      <div class="d-flex justify-content-center colorSandyBrown font-weight-bold">
      <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="pictureAdd" name="pictureAdd" value="Ajouter">
    </div>
    <!--Fin du formulaire de contact-->
  </form>
    </div>
</div>
</div>
<?php 
 }
include ROOT .'/views/include/footer.php';
?>