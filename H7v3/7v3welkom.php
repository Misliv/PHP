<?php
include ('7v3config.php');

if (!isset($_SESSION['uname'])) {
    header('Location: 7v3login.php');
}

if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Homepage</h1>
<form method="post" action="">
    <input type="submit" value="Logout" name="but_logout">
</form>
</body>
</html>
