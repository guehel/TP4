<?php

require_once 'includes.php';


$message = array("connexion"=>"");
$commande = new Commande();
$vue = '../vue/vueCommande.php';


if (!empty($_GET)) {
    if( !isset($_GET['confirme'])){
    $disque = htmlspecialchars($_GET['disque']);
    $souris = htmlspecialchars($_GET['souris']);
    $cable = htmlspecialchars($_GET['cable']);
    $adresse = htmlspecialchars($_GET['adresse']);
    $commande->setAdresse($adresse);
    $commande->setCable($cable);
    $commande->setSouris($souris);
    $commande->setDisque($disque);
    $vue = '../vue/vueConfirmation.php';
     }
    else {
        $comtexte=$_GET['commande'];
        $commande->fromArray($comtexte);
        $factory = new Factory('localhost', 'root', '');
        $bdCommandes = $factory->getCommandeDAO();
        
        if ($bdCommandes->insert($commande)) {
            $message['connexion'] = "votre commande a ete enregistree";
        } else {
            $message['connexion'] = "l'enregistrement de votre commande a echoué";
        }
    }
}


require $vue;
?>
