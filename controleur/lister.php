<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'includes.php';



$factory = new Factory('localhost', 'root', '');
$bdStagiaire = $factory->getStagiaireDAO();
$stagiaires = $bdStagiaire->find();
$bdNationalite = $factory->getNationaliteDAO();
$nationalites = $bdNationalite->find();
$bdinscription = $factory->getStagiaireFormateurDAO();
$bdFormations = $factory->getTypeFormationDAO();
$formations = $bdFormations->find();
$bdFormateurs = $factory->getFormateurDAO();
$formateurs = $bdFormateurs->find();
$message = '';
if (!empty($_GET)) {
//    print_r($_GET);
    $action = htmlspecialchars($_GET['action']);
    $id = htmlspecialchars($_GET['idEtudiant']);


    $stagiaire = new Stagiaire();
    $stagiaire->setId($id);
    $formation = htmlspecialchars($_GET['formation']);
    $stagiaire->setId_type_formation($formation);
     $professeur = htmlspecialchars($_GET['professeur']);
        $form_stag = new stagiaire_formateur();
        $form_stag->setid_formateur($professeur);
        $form_stag->setid_stagiaire($id);
        
    if ($action == 1) {

        $retour = true;
//        if ($form_stag->valide()) {
            $retour = $bdinscription->delete($form_stag);
//        }
        if ($retour) {
            $message = "Suppresion du cours effectuee";
        } else {
            $message = "Suppresion du cours impossible";
        }
        if ($retour = $bdStagiaire->delete($stagiaire)) {
            $message = "Suppresion de l'etudiant effectuer";
        } else {
            $message = "Suppresion du cours impossible";
        }
    } elseif ($action == 2) {
        $idEtudiant = htmlspecialchars($_GET['idEtudiant']);
        $nom = htmlspecialchars($_GET['nom']);
        $prenom = htmlspecialchars($_GET['prenom']);
        $nationalite = htmlspecialchars($_GET['nationalite']);
        $stagiaire->setNom($nom);
        $stagiaire->setPrenom($prenom);
        $stagiaire->setIdNationalite($nationalite);
        $bdStagiaire->update($stagiaire);
        $formateur = new Formateur();



        if (isset($_GET['professeur'])) {

           $tagDebut= 'debut'.$professeur;
           $tagFin= 'fin'.$professeur;
            $date_debut = htmlspecialchars($_GET[$tagDebut]);
            $date_fin = htmlspecialchars($_GET[$tagFin]);
           
            $form_stag->setDate_debut($date_debut);
            $form_stag->setDate_fin($date_fin);

            $retour = $bdinscription->update($form_stag);

//            $message = insererRelation($stagiaire->getId(), $formateur->id_formateur, $factory);
        } else {
            $message = "aucun professeur selectionne";
        }
    } {
        $message = $stagiaire->getErreur();
    }
    $stagiaires = $bdStagiaire->find();
}

require '../vue/vueModification.php';
?>
