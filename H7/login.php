<?php
 $users = array(
     "janjaap" => "1234",
     "bert" => "4321",
     "jans" => "2143",
 );

 if(isset($_POST['knop'])
     && isset($users[$_POST["login"]])
     && $users[$_POST["login"]] == $_POST['pwd']) {
     $message = "Welkom!!! ";
 } else {
     $message = "Inloggen";
 }
 ?>

<html>
<body>
<h1><?php echo $message; ?></h1>
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
</form>
</body>
</html>
