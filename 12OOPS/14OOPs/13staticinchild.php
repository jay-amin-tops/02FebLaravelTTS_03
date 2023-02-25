<?php


class StaticClassExample{
    public static $staticDmParent = "Static DM<br>";
}
class StaticClassExampleChild extends StaticClassExample{
    public static $staticDm = "Static DM<br>";
    public static function FunctionName(){
        echo "called<br>";
        echo self::$staticDm;
        echo parent::$staticDmParent;
        echo self::$staticDmParent;
        # code...
    }
}

// echo StaticClassExample::$staticDm;
echo StaticClassExampleChild::FunctionName();


?>