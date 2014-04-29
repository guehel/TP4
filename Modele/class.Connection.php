<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Connection.php
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

/* user defined includes */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000866-includes begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000866-includes end

/* user defined constants */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000866-constants begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000866-constants end

/**
 * Short description of class Connection
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Connection {

    // --- ASSOCIATIONS ---

    private static $connection;
    private $fichier;
  


    public  function open_file($mode) {
      
        return fopen($this->fichier, $mode);
    }
     public  function get_file() {
      
        return file($this->fichier);
    }

    public function close_connextion($handle) {
        fclose($handle);
    }

    

    public static function getInstance($fichier) {
        if (Connection::$connection == null) {
            Connection::$connection = new Connection($fichier);
        }
        return Connection::$connection;
    }

    private function __construct($fichier) {
        $this->fichier = $fichier;
        self::$connection = null;
    }

}

/* end of class Connection */
?>