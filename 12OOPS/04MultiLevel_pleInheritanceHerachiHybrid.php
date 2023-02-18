<?php

class a{
    function addition($x,$y){
        return $x+$y;
    }    
}
class b extends a{
    function average($a,$b){
        $sum = $this->addition($a,$b); 
        return $sum/2;
    }    
}
// class c extends b,a{
class c extends b{
    function average($a,$b){
        $sum = $this->addition($a,$b); 
        return $sum/2;
    }    
}


$EncObject = new c;
echo "<br>Addition of 50 and 90 is ".$EncObject->addition(50,90);
echo "<br>average of 50 and 90 is ".$EncObject->average(50,90);

?>

<p>class is a collection of datamember and member funtions only</p>
<p>we cnt access properties of class without creating an object</p>
<p>with the help of new keyword we are able to make an object</p>