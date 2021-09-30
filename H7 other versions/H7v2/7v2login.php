<?php
include ('7v2functions.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login V2</title>
</head>
<body>
<div class="header">
    <h2>Login</h2>
</div>
<form method="post" action="7v2login.php">
    <?php echo display_error(); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" required>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="submit">Login</button>
    </div>
</form>
</body>
</html>

