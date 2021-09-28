<?php
 session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
     echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>";

 } else if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] != "Administrator") {
    echo "<h1>Onvoldoende rechten om de pagina te bezoeken</h1>";

}

?>

<p><a href="7v1website.php">Terug naar de website</a></p>
<p><a href="7v1login.php?loguit">Uitloggen</a></p>
