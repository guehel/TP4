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


require_once('class.Commande.php');
require_once('class.AbsDAO.php');

class CommandeDAO extends absDAO {

    public function find() {
      
        $fichierCommande= $this->connection->get_file();
        return explode("\n", $fichierCommande);
    }

    public function delete($commande) {
        return null;
    }

    public function insert($commande) {
        $s = serialize($commande);
        if ($handler = $this->connection->open_file("ab")) {
            flock($handle, LOCK_EX);
            fwrite($handle, $s, strlen($s));
            $this->connection->close_connextion($handle);
            return true;
        } else {
            return false;
        };
    }

    public function update($commande) {
        return null;
    }

}

/* end of class FormateurDAO */
?>