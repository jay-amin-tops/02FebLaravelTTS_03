<?php

class MagicPoly{
    public function __get($data){
        echo $data;
    }
    public function __set($var,$val){
        echo "variable is $var and value is $val";
    }
    public function __call($funcname,$data){
        echo "<pre>";
        echo $funcname;
        print_r($data);
        
    }
}

$MagicPoly = new MagicPoly;
// $MagicPoly->username;
// $MagicPoly->password;
// $MagicPoly->username = "TOPS";
// $MagicPoly->password = "123";

$MagicPoly->getdata("users");
$MagicPoly->getdata("username","password","email");



?>