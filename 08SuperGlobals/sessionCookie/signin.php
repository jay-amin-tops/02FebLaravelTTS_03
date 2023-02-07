<?php 
require_once 'header.php'; 

if (isset($_COOKIE['username'])) {
    if ($_COOKIE['username'] == "TOPS" && $_COOKIE['password'] == "123") {
        header("location:userdashboard.php"); // for redition one page to other

    }
}

if (isset($_POST['save'])) {
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    if ($_POST['username'] == "TOPS" && $_POST['password'] == "123") {
        echo "Login success";
        $_SESSION['login_status'] = "Login success";
        $_SESSION['udata'] = array("username"=>$_POST['username'],"gender"=>"Male","Mobile"=>"8987987988");
        if (isset($_REQUEST['rememberme'])) {
            setcookie("username","TOPS");
            setcookie("password","123",3600+time());
        }
        header("location:userdashboard.php"); // for redition one page to other
    } else {
        echo "Invalid user";
    }
    
}

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    <form method="post">
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter User Name" name="username" id="username">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Login" name="save" id="save">
                                <input type="reset" class="btn btn-danger" value="Cancel" >
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <input type="checkbox" name="rememberme" id="rememberme"> <label for="rememberme">Remember Me</label> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>