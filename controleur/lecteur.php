<?php
    date_default_timezone_set('Canada/Eastern');
    $disque = htmlspecialchars($_GET['disque']);
    $souris = htmlspecialchars($_GET['souris']);
    $cable = htmlspecialchars($_GET['cable']);
    $adresse = htmlspecialchars($_GET['adresse']);
  
    $commande->setAdresse($adresse);
    $commande->setCable($cable);
    $commande->setSouris($souris);
    $commande->setDisque($disque);
    $commande->setDate(date('Y-m-d'));
    $commande->setHeure(date('H:i'));
  
    