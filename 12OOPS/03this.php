<?php

class EncapsulationExample{
    public $datamember = "Something";
    function otherfunction(){
        return "testing";
    }    
    function addition($a,$b){
        echo $this->datamember;
        echo $this->otherfunction();
        echo "<br>";
        return $a+$b;
    }    
}


$EncObject = new EncapsulationExample;
echo $EncObject->addition(50,90);

?>

<p>$this is pesudo variable refering it selfs object</p>