<?php


class constructorExample{
    // public $connection = new mysqli("localhost","root","","masterdatabase"); //New expressions are not supported in this context in
    public $connection = "";
    public function __construct() {
        echo "called __construct is a method which is invoked by default when objects are created";
        $this->connection = new mysqli("localhost","root","","masterdatabase"); 
        echo "<pre>";
        print_r($this->connection);
        // con
    }
    public function __destruct()
    {
        echo "called __destruct will be called at last";   
    }
}

// $object = new constructorExample;
$object = new constructorExample;


?>