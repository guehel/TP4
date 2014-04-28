<?php

abstract  class absDAO{
    protected $connection = null;
    protected  $bdName = "tp3_poo3";
    public function __construct( Connection $connextion)
    {
        $this->connection = $connextion;
    }
    
       
    public abstract function find();
    public abstract function insert($object);
    public abstract function delete($object);
    public abstract function update($object);
    
}


?>
