<?php 
require_once 'header.php'; 

echo "<pre>";
print_r($_SESSION);

if (!isset($_SESSION['login_status'])) {
    header("location:index.php");
}

?>

<h2>Welcome to my site</h2>

</body>
</html>