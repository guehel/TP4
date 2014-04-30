<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


class Connection {

  

    private static $connection;
    private $fichier;
  


    public  function open_file($mode) {
      
        return fopen($this->fichier, $mode);
    }
     public  function get_file() {
      
        return file('../controleur/commandes.txt');
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