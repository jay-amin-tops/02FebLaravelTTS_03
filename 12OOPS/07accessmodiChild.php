<?php

use ParentClass as GlobalParentClass;

class ParentClass{
    public $dataMemberPublic = "Data Member Public";
    private $dataMemberPrivate = "dataMemberPrivate";
    protected $dataMemberProtected = "dataMemberProtected";
    function addition(){
        echo $this->dataMemberPrivate ;
        
    }    
}
class ChildClass extends GlobalParentClass{
    public function DataMember()
    {
        echo $this->dataMemberPublic;
        echo $this->dataMemberProtected;
        // echo $this->dataMemberPrivate; // ChildClass::$dataMemberPrivate 
    }
}

$EncObject = new ChildClass;
echo $EncObject->DataMember();
echo $EncObject->addition();
// echo $EncObject->dataMemberPrivate; //Cannot access private property ParentClass:
// echo $EncObject->dataMemberProtected; //Cannot access protected property ParentClass:
?>