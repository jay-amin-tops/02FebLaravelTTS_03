<?php

session_start();
session_destroy();
setcookie("username","",3600-time());
setcookie("password","",3600-time());
header("location:index.php");

?>