<?php
    include ('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Je moet ingelogd zijn";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<div class="header">
    <h2>Homepage</h2>
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
        <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
        <br>
        <a href="home.php?logout='1'" style="color: red;">logout</a>
    </small>
    <?php endif ?>
</div>
</body>
</html>
