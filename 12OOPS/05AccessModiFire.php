<?php

class ParentClass{
    public $dataMemberPublic = "Data Member Public";
    private $dataMemberPrivate = "dataMemberPrivate";
    protected $dataMemberProtected = "dataMemberProtected";
    function addition($x,$y){
        return $x+$y;
    }    
}

$EncObject = new ParentClass;
echo $EncObject->dataMemberPublic;
// echo $EncObject->dataMemberPrivate; //Cannot access private property ParentClass:
// echo $EncObject->dataMemberProtected; //Cannot access protected property ParentClass:
?>