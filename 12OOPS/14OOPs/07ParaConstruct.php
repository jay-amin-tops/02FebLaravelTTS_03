<?php


class constructorExample{
    public $connection = "";
    public function __construct($dbname) {
        $this->connection = new mysqli("localhost","root","",$dbname); 
        echo "<pre>";
        print_r($this->connection);
        // con
    }
}

// $object = new constructorExample("mydatabase");
$object = new constructorExample("masterdatabase");


?>