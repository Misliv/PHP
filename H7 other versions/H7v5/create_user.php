<?php
    include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>create user</title>
</head>
<body>
    <div class="header">
        <h2>Admin - create users</h2>
    </div>

    <form method="post" action="create_user.php">
        <?php echo display_error(); ?>

        <div class="input-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>User type</label>
            <select name="user_type" id="user_type">
                <option value=""></option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
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
            <button type="submit" class="btn" name="register_btn"> + Creëer gebruiker</button>
        </div>
    </form>
</body>
</html>
