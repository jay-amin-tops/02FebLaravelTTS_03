<?php

class Controller
{
    private $baseURL = "";
    public function __construct()
    {
        // echo "Called";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "http://localhost/laravel/02FebLaravelTTS_03/13MVC/<br>";
        $ReqURI = explode("/", $_SERVER['REQUEST_URI']);
        // print_r($ReqURI);
        // echo $this->baseURL = "<br>".$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$_SERVER['REQUEST_URI']."/assets/<br>";
        $this->baseURL = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ReqURI[1] . "/" . $ReqURI[2] . "/" . $ReqURI[3] . "/assets/";
        // exit;
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {

                case '/home':
                    include_once("views/header.php");
                    include_once("views/content.php");
                    include_once("views/footer.php");
                    break;
                case '/about':
                    include_once("views/header.php");
                    echo "<h2>About us page data</h2>";
                    include_once("views/footer.php");
                    break;
                case '/login':
                    include_once("views/header.php");
                    include_once("views/loginpage.php");
                    include_once("views/footer.php");
                    break;
                case '/register':
                    include_once("views/header.php");
                    include_once("views/registerpage.php");
                    include_once("views/footer.php");
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
    }
}
$Controller = new Controller;
