<?php

echo "<pre>";
echo "======form get method data will be recieved in $ _GET super globals var";
print_r($_GET);
echo "======form POST method data will be recieved in $ _POST super globals var";
print_r($_POST);
echo "======form get and post both methods data will be recieved in $ _REQUEST super globals var";
print_r($_REQUEST);
print_r($GLOBALS);
print_r($_FILES);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="val1" id="">
        <input type="submit" name="btn" id="">
    </form>
    <form method="post">
        <input type="text" name="valpost1" id="">
        <input type="submit" name="btn" id="">
    </form>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="profilepic" id="">
        <input type="submit" name="btn" id="">
    </form>
</body>
</html>