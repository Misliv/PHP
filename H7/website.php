<?php
 session_start();

 if(isset($_SESSION["user"])) {
     echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " met de rol " . $_SESSION["user"]["rol"] . " op de website</h1>";


 } else {
     header('location: login.php');
 }

 ?>

<p><a href="admin.php">Admingedeelte website</a></p>
<p><a href="login.php?loguit">Uitloggen</a></p>