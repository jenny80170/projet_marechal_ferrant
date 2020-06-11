<?php
//liste des formats autorisés
$allowed = array('jpg', 'jpeg', 'png', 'gif');
foreach ($allowed as $value) {
    $list = $value . ', ';
}
require_once ROOT .'/models/connexionDbModel.php';

class Settings
{
    static $password = "jenny1109";
    static $uploadFolder = "/views/assets/img/galery/";
}