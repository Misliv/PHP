<?php
session_start();
include "7v4validate.php";

if(isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"] . "met de rol " . $_SESSION["user"]["rol"] . " op de website</h1>";
}

?>

<p>Welkom, gebruiker.</p>
<form method='post' action="">
<input type="submit" value="Logout" name="but_logout">
</form>
