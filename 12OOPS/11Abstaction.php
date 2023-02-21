<?php


abstract class RBI{
    abstract public function GiveInterest();
    public function simpleMethods(){
        echo "simpleMethods in abstacted class";
    }
}
class DhakkaBank extends RBI{
    public function GiveInterest(){
        echo "called";
        $this->simpleMethods();
    }
    public function OtherName(){
        echo "Other Function";
    }
}


// $ChildClass =new RBI; never initiate 
$ChildClass =new DhakkaBank;

?>
<p>Abstaction => hide something</p>
<p>Parent will declared abstracted method, abstracted methods only declared by abstracted class only </p>
<p>Abstracted class cant be initiated/able to object create </p>
<p>Abstracted method while declaration its dnt contain body part </p>
<p>we can use Abstracted class by inheritance only</p>
<p>Abstracted class may contain simple methods</p>