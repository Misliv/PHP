<?php
    include('functions.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>register</title>
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
    <div class="input-group">
        <label>Gebruikersnaam</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Wachtwoord</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Bevestig wachtwoord</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <p>
        Al een lid? <a href="login.php">Log in</a>
    </p>
</form>
</body>
</html>