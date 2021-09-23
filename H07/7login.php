<?php
 session_start();
 include ("7config.php");

 //* $users = array(
 //    "may" => array("pwd" => "1234", "rol" => "Administrator"),
 //   "bert" => array("pwd" => "1235", "rol" => "Gebruiker"),
 //    "jans" => array("pwd" => "1236", "rol" => "Administrator")
 //);

  if (isset($_GET["loguit"])) {
      $_SESSION = array();
      session_destroy();
  }

  if (isset($_POST['knop'])
      && isset($users[$_POST["login"]])
      && $users[$_POST["login"]] ["pwd"] == $_POST['pwd']) {
      $_SESSION["user"] = array("naam" => $_POST["login"],
          "pwd" => $users[$_POST["login"]]['pwd'],
          "rol" => $users[$_POST["login"]]['rol']);
      header('Location: 7website.php');
      $message = "Welkom " . $_SESSION["user"]["naam"] . " met de rol "
          . $_SESSION["user"]["rol"];

  } else {
      $error= "Gebruikersnaam en/of wachtwoord kloppen niet.";
  }
  ?>

<html>
<body>
<h1>Inloggen</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
    <div><?php echo $error; ?></div>
</form>
</body>
</html>
