<?php
include "6_2config.php";

if(!isset($_SESSION['email'])){
    header('Location: 6_2login.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: 6_2login.php');
}
?>
<!doctype html>
<html>
<head></head>
<body>
<h1>Homepage</h1>
<p>Welkom</p>
</form>
</body>
</html>