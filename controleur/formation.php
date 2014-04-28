<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'includes.php';




$factory = new Factory('localhost', 'root', '');
$bdNationalite = $factory->getNationaliteDAO();
$nationalites = $bdNationalite->find();
$bdFormations = $factory->getTypeFormationDAO();
$formations = $bdFormations->find();
$bdFormateurs = $factory->getFormateurDAO();
$formateurs = $bdFormateurs->find();
$message = '';



if (!empty($_GET)) {
    
    print_r($_GET);

    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);
    $nationalite = htmlspecialchars($_GET['nationalite']);
    $formation = htmlspecialchars($_GET['formation']);
    $stagiaire = new Stagiaire();
    $stagiaire->setNom($nom);
    $stagiaire->setPrenom($prenom);
    $stagiaire->setIdNationalite($nationalite);
    $stagiaire->setId_type_formation($formation);

    if ($stagiaire->valide()) {
        $bdStagiaire = $factory->getStagiaireDAO();
        $inserted = $bdStagiaire->insert($stagiaire);
        if ($inserted) {
            $message = "insertion reussie";
            $formateur = new Formateur();
            if(!empty($_GET['professeur'])){
            $formateur->id_formateur = htmlspecialchars($_GET['professeur']);
           
            $bsl = array();
            $bsl = $bdStagiaire->find();
            $message = insererRelation($bsl[0]['Id'], $formateur->id_formateur,$factory );

        } else {
            $message = "aucun professeur selectionne";
        }
        } else {
            $message = "echec reussie";
        }
    } else {
        $message = $stagiaire->getErreur();
    }
}

require '../vue/vueFormation.php';
?>
