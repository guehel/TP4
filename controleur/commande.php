<?php

require_once 'includes.php';


$message = array();
$commande = new Commande();


if (!empty($_GET)) {

    print_r($_GET);

    $disque = htmlspecialchars($_GET['disque']);
    $souris = htmlspecialchars($_GET['souris']);
    $cable = htmlspecialchars($_GET['cable']);
    $adresse = htmlspecialchars($_GET['adresse']);
    $commande->setAdresse($adresse);
    $commande->setCable($cable);
    $commande->setSouris($souris);
    $commande->setDisque($disque);

    if ($commande->valide()) {
        $factory = new Factory('localhost', 'root', '');
        $bdCommandes = $factory->getCommandeDAO();
        
        if ($bdCommandes->insert($commande)) {
            $message['connexion'] = "votre commande a ete enregistree";
        } else {
            $message['connexion'] = "l'enregistrement de votre commande a echoué";
        }
    } else {
        $message = $commande->getErreur();
    }
}


require '../vue/vueCommande.php';
?>
