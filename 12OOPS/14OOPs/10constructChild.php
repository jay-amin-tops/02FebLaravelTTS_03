<?php


class constructorExample{
    public $connection = "";
    public function __construct() {
        echo "called __construct";
    }
}
class childeclass extends constructorExample{
    public function __construct() { // implicit constructor calling while object creation
        parent::__construct(); // explicit constructor calling
        echo "Child construct ";
    }
}

$object = new childeclass;


?>