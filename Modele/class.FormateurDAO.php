<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.FormateurDAO.php
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


require_once('class.Formateur.php');
require_once('class.AbsDAO.php');


class FormateurDAO extends absDAO
{
  

   
    public function find()
    {
       
//     $sql = "SELECT `Id_formateur`, `Nom`, `Prenom`, `Id_salle` FROM `formateur`";
        $sql = "SELECT \n"
    . "T.ID_TYPE_FORMATION, \n"
    . "f.Id_Formateur,\n"
    . "f.NOM, \n"
    . "F.PRENOM, \n"
    . "F.ID_SALLE\n"
    . "FROM \n"
    . "FORMATEUR F JOIN TYPE_FORMATION_FORMATEUR T\n"
    . "ON F.ID_FORMATEUR = T.ID_FORMATEUR ";
             
       return parent::execute_request($sql);
    }

 
    public function delete(  $formateur)
    {
        $returnValue = null;

    
        return $returnValue;
    }

  
    public function insert(  $formateur)
    {
        $returnValue = null;

      

        return $returnValue;
    }

    
    public function update(  $formateur)
    {
        $returnValue = null;
        return $returnValue;
    }

   


} /* end of class FormateurDAO */

?>