<?php

date_default_timezone_set('Asia/Kolkata');
error_reporting(0);
class Model{
    // $connection = new mysqli("hostname","username","password","databasename");
    // $connection = new mysqli("localhost","root","","masterdatabase");
    private $connection ="";
    public function __construct() {
        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase");
            echo "inside try";
        } catch (\Throwable $th) {
            // echo "inside catch";
            // echo "<pre>";
            // print_r($th->getMessage());
            // echo "</pre>";
            if (!file_exists("log")) {
                mkdir("log");
            }
            $errorFileName = date('d_M_Y');
            $Error=$th->getMessage();
            $ErrorMsg = PHP_EOL."============================================ ".PHP_EOL;
            $ErrorMsg .= "Error DateTime >> ".date('d-M-Y h:i:s A').PHP_EOL;
            $ErrorMsg .= "Error Message  >> ".$Error.PHP_EOL;
            $ErrorMsg .= "============================================ ".PHP_EOL;
            file_put_contents("log/$errorFileName.txt",$ErrorMsg,FILE_APPEND);
            echo "<h2>$Error</h2>";
        }
        // echo "<pre>";
        // print_r($this->connection);
        // echo "</pre>";
    }
    public function insert(){}
    public function update(){}
    public function delete(){}
}

$Model = new  Model;
?>