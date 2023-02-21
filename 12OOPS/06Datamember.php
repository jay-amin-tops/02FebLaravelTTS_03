<?php

class ParentClass{
    public $dataMember = "Data Member";
    function addition($x,$y){
        return $x+$y;
    }    
}

$EncObject = new ParentClass;
echo $EncObject->dataMember;
?>