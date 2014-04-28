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

/**
 * include Salle
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Salle.php');

/* user defined includes */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000087F-includes begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000087F-includes end

/* user defined constants */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000087F-constants begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000087F-constants end

/**
 * Short description of class Formateur
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Formateur
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_formateur
     *
     * @access public
     * @var Integer
     */
    public $id_formateur = null;

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var String
     */
    public $nom = null;

    /**
     * Short description of attribute prenom
     *
     * @access public
     * @var String
     */
    public $prenom = null;

    /**
     * Short description of attribute salle_id
     *
     * @access public
     * @var Salle
     */
    public $salle_id = null;

    // --- OPERATIONS ---

} /* end of class Formateur */

?>