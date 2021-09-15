<?php
    if ($_POST) {
        $c = $_POST['celsius'];
        $f = $c * 1.8 + 32;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Celsius naar Fahrenheit</h1>

<form method="post">
    <input type="text" name="celsius"><br>
    <?php
    if (isset($f)){
        echo "fahrenheit = ".$f;
    }
    ?>
</form>
</body>
</html>
