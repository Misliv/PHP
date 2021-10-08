<?php
include('functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "Je moet eerst inloggen";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <div class="header">
        <h2>Admin - Homepage</h2>
    </div>
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <div class="profile_info">
        <img src="../img/apen/aap6.jpg">

        <div>
            <?php
            if (isset($_SESSION['user'])) :
            ?>
            <strong><?php echo $_SESSION['user']['username']; ?></strong>

            <small>
                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                <br>
                <a href="home.php?logout='1'" style="color: red;">loguit</a>
                &nbsp; <a href="create_user.php"> + voeg gebruiker toe</a>
            </small>
            <?php endif ?>
        </div>
    </div>
</div>
</body>
</html>
