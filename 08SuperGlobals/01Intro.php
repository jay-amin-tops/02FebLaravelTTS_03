
<?php
echo "<pre>";
$_ENV=getenv();
print_r($_ENV);
print_r($_SERVER);
echo "</pre>";


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
    <ul>
        <li>$_ENV</li>
        <li>$_SERVER</li>
        <li>$_GET</li>
        <li>$_POST</li>
        <li>$_REQUEST</li>
        <li>$_FILES</li>
        <li>$GLOBALS</li>
        <li>$_SESSION</li>
        <li>$_COOKIE</li>
    </ul>
</body>
</html>