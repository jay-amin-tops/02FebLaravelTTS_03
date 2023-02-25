<?php

class ParentClass{
    public $dataMember = "Data Member public";
    private $dataMembPrivate = "Data Member Private";
    protected $dataMembProtected = "Data Member Protected";
    function addition(){
        foreach ($this as $key => $value) {
            echo "$key => $value <br>";
        }
    }    
}

$jeichhathayae = new ParentClass;
$jeichhathayae->addition();

// foreach ($jeichhathayae as $key => $value) {
//     echo "$key => $value";
// }

?>