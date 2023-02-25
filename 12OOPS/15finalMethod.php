<?php

use ParentClass as GlobalParentClass;
 class ParentClass{
    public $dataMember = "Data Member";
    final function addition($x,$y){
        return $x+$y;
    }    
}

class ChildClass extends GlobalParentClass{ //Fatal error: Class ChildClass cannot extend final class ParentClass in C:\xampp\htdocs\laravel\02FebLaravelTTS_03\12OOPS\14FinalClass.php on line 12
    public function FunctionName(){
        echo "called";
    }
    // function addition($x,$y){ //Cannot override final method ParentClass::addition() in
    //     return $x+$y+50;
    // }
}
$EncObject = new ChildClass;
echo $EncObject->FunctionName();
echo $EncObject->addition(1,0);
?>