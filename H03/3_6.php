<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Zwemclubs</title>
    <style>
    </style>
</head>
<body>
<?php
$zwemmers = array("De spartelkuikens" => 25, "De waterbuffels" => 32, "Plonsmderin" => 11, "Bommetje" => 23);

foreach ($zwemmers as $zwem => $aantal) {
    echo " ".$zwem." ".$aantal."<br>";
}
?>
</body>
</html>