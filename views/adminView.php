<?php
// Début de la session
session_start();
$page = 'Administrateur';
// Insertion du header avec entête et barre de navigation
require_once ROOT .'/views/include/header.php'; ?>
<div class="container-fluid">
        <div class="d-flex justify-content-center">
    <?php
// Insertion du menu sur le coter gauche
require_once ROOT .'/views/include/menuAdmin.php';
?>
<div class="col-md-9 tableAdmin">
    <div class="d-flex justify-content-center h1_admin">
    <h1 class="mt-5 mb-5">Ma liste de clients</h1>
    </div>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Code postale</th>
            <th>Ville</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Pseudo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($userList as $users) { ?>
        <tr>
            <td data-label="Nom :"> <?= $users['lastname'] ?> </td>
            <td data-label="Prénom :"> <?= $users['firstname'] ?> </td>
            <td data-label="Adresse :"> <?= $users['address'] ?> </td>
            <td data-label="Code postale :"> <?= $users['zipCode'] ?> </td>
            <td data-label="ville :"> <?= $users['city'] ?> </td>
            <td data-label="Email :"> <?= $users['mail'] ?> </td>
            <td data-label="Téléphone :"> <?= $users['phone'] ?> </td>
            <td data-label="Pseudo :"> <?= $users['pseudo'] ?> </td>
        </tr>
           <?php } ?>
    </tbody>
    </table>
</div>
</div>
</div>
</div>
<?php 
require_once ROOT .'/views/include/footer.php';
?>