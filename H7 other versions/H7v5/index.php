<?php
    include ('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>index</title>
</head>
<body>
    <div class="header">
        <h2>Homepage</h2>
    </div><div class="content">
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
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
                <?php if (isset($_SESSION['user'])) : ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                <small>
                    <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    <br>
                    <a href="index.php?logout='1'" style="color: red;">loguit</a>
                </small>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>

