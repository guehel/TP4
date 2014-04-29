<?php

error_reporting(E_ALL);
require_once 'class.StagiaireDAO.php';


if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


require_once('class.Connection.php');


class Factory
{
  
    private  $connection = null;

  
    public function __construct($fichier) {
        $this->connection = Connection::getInstance($fichier);
                
            
      
    }


    public function getCommandeDAO()
    {
        $returnValue = new CommandeDAO($this->connection);
        return $returnValue;
    }

  

} /* end of class Factory */

?>