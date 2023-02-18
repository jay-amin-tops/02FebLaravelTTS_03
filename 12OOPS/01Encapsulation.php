<?php

class EncapsulationExample{
    function addition($a,$b){
        return $a+$b;
        return 50+80;
    }    
}


$EncObject = new EncapsulationExample;
echo $EncObject->addition(50,90);

?>

<p>class is a collection of datamember and member funtions only</p>
<p>we cnt access properties of class without creating an object</p>
<p>with the help of new keyword we are able to make an object</p>