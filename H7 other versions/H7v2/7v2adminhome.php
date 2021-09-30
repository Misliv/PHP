<?php include ('7v2functions.php');
if (!isAdmin()) {
    $_SESSION['msg'] = "Je moet eerst inloggen";
    header('location 7v2login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: 7v2login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<div class="header">
    <h2>Homepage admin</h2>
</div>
<div class="content">
    <?php if (isset($_SESSION['success'])):?>
    <div class="error success"">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div>
<?php endif ?>
<div>
    <?php if (isset($_SESSION['user'])):?>
        <strong><?php echo $_SESSION['user']['username']; ?></strong>

        <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
            <br>
            <a href="7v2login.php?logout='1'" style="color: red;">logout</a>
        </small>
    <?php endif ?>
</div>
</body>
</html>
