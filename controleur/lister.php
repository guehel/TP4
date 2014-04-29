<?php
//
require_once 'includes.php';
$message = array("connexion" => "");
$vue = '../vue/erreur.php';



if (!empty($_GET)) {
    
    $commande = new Commande();
     include 'lecteur.php';
    $vue = '../vue/vueConfirmation.php';
}


require $vue;

?>