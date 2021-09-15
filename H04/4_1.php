<?php
if($_POST) {
    $celsius = $_POST['celsius'];
    $fahrenheit = $celsius * 1.8 + 32;
}
?>

<!DOCTYPE html>

<html>
<head>
    <title> temperatuur </title>
</head>
<body>
<h1> Celsius naar Fahrenheit </h1>
<form action="" method="post">
    Celsius: <input type="text" name="celsius" /><br>

    <?php

    if(isset($fahrenheit)){
        echo "fahrenheit = ".$fahrenheit;
    }
    ?>
</form>
</body>
</html>