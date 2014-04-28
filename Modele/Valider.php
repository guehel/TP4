<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Valider
 *
 * @author Guehel
 */
class Valider {
   public function validerNombre($valeur, $min, $max){
       $valide = is_numeric($valeur) && ($valeur>=$min)  && ($valeur <= $max);
       return $valide;
   }
   
    public function validerTexte($valeur){
        $texte = trim($valeur);
        
       return (strlen($texte)>0);
   }
}
