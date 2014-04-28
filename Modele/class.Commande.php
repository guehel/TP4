<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Formateur.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.04.2014, 16:54:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}



require_once 'valider.php';
class Commande
{
  
    private  $disque = null;

   
    private $souris = null;

    
    private $cable = null;

    
    private $adresse = null;
    
    private $erreur = array();
    
    private $valideur;
    
   public function __construct(){
       $this->valideur = new Valider();
   }


   public function getDisque() {
       return $this->disque;
   }

   public function getSouris() {
       return $this->souris;
   }

   public function getCable() {
       return $this->cable;
   }

   public function getAdresse() {
       return $this->adresse;
   }

   public function getErreur() {
       return $this->erreur;
   }

   public function getValideur() {
       return $this->valideur;
   }

   public function setDisque($disque) {
       $this->disque = $disque;
   }

   public function setSouris($souris) {
       $this->souris = $souris;
   }

   public function setCable($cable) {
       $this->cable = $cable;
   }

   public function setAdresse($adresse) {
       $this->adresse = $adresse;
   }

   public function setErreur($erreur) {
       $this->erreur = $erreur;
   }

   public function setValideur($valideur) {
       $this->valideur = $valideur;
   }

    public function Valide() {
       $valide = $this->valideur->validerNombre( $this->disque, 0, 100);
       if(!$valide){
           $this->erreur[] = array(
               'disque'=>'le nombre de disque doit est inferieur a 100'
           );
       }
       $valide = $this->valideur->validerNombre( $this->souris, 0, 100);
       if(!$valide){
           $this->erreur[] = array(
               'souris'=>'le nombre de souris doit est inferieur a 100'
           );
       }
       
        $valide = $this->valideur->validerNombre( $this->cable, 0, 1000);
       if(!$valide){
           $this->erreur[] = array(
               'cable'=>'le longueur de cable  doit est inferieur a 1000'
           );
       }
       
       
       $valide = $this->valideur->validerTexte( $this->adresse);
       if(!$valide){
           $this->erreur[] = array(
               'adresse'=>'l\'adresse de cable doit etre remplie'
           );
       }
       
       return (count($this->erreur)==0);
       
   }
    

    

} /* end of class Formateur */

?>