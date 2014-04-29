<?php

require_once 'includes.php';
$vue='../Vue/vueListeCommandes.php';

 $factory = new Factory('localhost', 'root', '');
        $bdCommandes = $factory->getCommandeDAO();
        $commandes = $bdCommandes->find();
        require $vue;