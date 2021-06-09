<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
$zwemclubs = array("De spartelkuikens 25", "De waterbuffels 32", "Plonsmderin 11", "Bommetje 23");

foreach($zwemclubs as $lid) {
    echo "<img src='../img/zwemmer" . $lid. "'>";
}
?>
</body>
</html>