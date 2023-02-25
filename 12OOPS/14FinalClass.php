<?php

use ParentClass as GlobalParentClass;

final class ParentClass{
    public $dataMember = "Data Member";
    function addition($x,$y){
        return $x+$y;
    }    
}

// class ChildClass extends GlobalParentClass{ //Fatal error: Class ChildClass cannot extend final class ParentClass in C:\xampp\htdocs\laravel\02FebLaravelTTS_03\12OOPS\14FinalClass.php on line 12
class ChildClass{ //Fatal error: Class ChildClass cannot extend final class ParentClass in C:\xampp\htdocs\laravel\02FebLaravelTTS_03\12OOPS\14FinalClass.php on line 12
    public function FunctionName(){
        echo "called";
    }
}
$EncObject = new ChildClass;
echo $EncObject->FunctionName();
$ParentClassObject = new ParentClass;
echo "<br>".$ParentClassObject->addition(50,60);
?>