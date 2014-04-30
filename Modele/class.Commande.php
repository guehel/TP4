<?php

error_reporting(E_ALL);


if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}



require_once 'valider.php';

class Commande {

    private $disque = null;
    private $souris = null;
    private $cable = null;
    private $adresse = null;
    private $date = null;
    private $heure = null;
    private $erreur = array();
    private $valideur;

    public function __construct() {
        $this->valideur = new Valider();
        $this->souris = 0;
        $this->cable = 0;
        $this->disque = 0;
        $this->adresse = '';
    }

    public function getHeure() {
        return $this->heure;
    }

    public function getDate() {
        return $this->date;
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

    public function setHeure($heure) {
        $this->heure = $heure;
    }

    public function setDate($date) {
        $this->date = $date;
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

    public function getValeur() {
        $somme = ($this->cable * 2) + ($this->disque * 100) + ($this->souris * 35);
        return $somme;
    }

    public function getQuantite() {
        $somme = ($this->cable) + ($this->disque) + ($this->souris);
        return $somme;
    }

    public function toArray() {
        $somme = array('date'=>$this->date, 'heure'=>$this->heure, 'adresse'=>$this->adresse, 'cable'=>$this->cable, 'disque'=>$this->disque, 'souris'=>$this->souris);
        return $somme;
    }

    public function fromArray($somme) {
        
        $this->date = $somme['date'];
        $this->heure = $somme['heure'];
        $this->adresse = $somme['adresse'];
        $this->cable = $somme['cable'];
        $this->disque = $somme['disque'];
        $this->souris = $somme['souris'];
    }

    public function Valide() {
        $valide = $this->valideur->validerNombre($this->disque, 0, 100);
        if (!$valide) {
            $this->erreur[] = array(
                'disque' => 'le nombre de disque doit est inferieur a 100'
            );
        }
        $valide = $this->valideur->validerNombre($this->souris, 0, 100);
        if (!$valide) {
            $this->erreur[] = array(
                'souris' => 'le nombre de souris doit est inferieur a 100'
            );
        }

        $valide = $this->valideur->validerNombre($this->cable, 0, 1000);
        if (!$valide) {
            $this->erreur[] = array(
                'cable' => 'le longueur de cable  doit est inferieur a 1000'
            );
        }


        $valide = $this->valideur->validerTexte($this->adresse);
        if (!$valide) {
            $this->erreur[] = array(
                'adresse' => 'l\'adresse de cable doit etre remplie'
            );
        }

        return (count($this->erreur) == 0);
    }
    
      public function toString(){
          $texte='<h4>Commande effectuee le '.$this->date.' a '.$this->heure
                  .'</h4><p><li>&#09Adresse '.$this->adresse
                  .'</li><li>&#09;Quantites '.$this->getQuantite()
                  .'</li><li>&#09;Prix '.$this->getValeur()
                  .'$CAD</li><li>&#09;Disques '.$this->disque
                   .'</li><li>Cables '.$this->cable
                   .'</li><li>Souris '.$this->souris
                  .'</li></p>'
                   ;
          return $texte;
                  
      }

}

/* end of class Formateur */
?>