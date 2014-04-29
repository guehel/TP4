<?php

require_once 'includes.php';
$message = array("connexion" => "**");
$vue = '../vue/vueCommande.php';


if (!empty($_GET)) {

//    print_r($_GET);
    $commande = new Commande();
    $somme = $_GET['commande'];
    $tableau = json_decode($somme, true);
//    $commande->fromArray($somme);

    $commande->setDate($tableau['date']);
    $commande->setHeure($tableau['heure']);
    $commande->setAdresse($tableau['adresse']);
    $commande->setCable($tableau['cable']);
    $commande->setDisque($tableau['disque']);
    $commande->setSouris($tableau['souris']);

    
    if ($commande->Valide()) {
       
        $factory = new Factory('localhost', 'root', '');
        $bdCommandes = $factory->getCommandeDAO();
       
        if ($bdCommandes->insert($commande)) {
            echo "votre commande a ete enregistree";
            
        } else {
           echo "l'enregistrement de votre commande a echoué";
          
        }
      
    }else {
    echo "votre commande n'est pas valide";
    
    }
} else {
    require $vue;
}
?>
