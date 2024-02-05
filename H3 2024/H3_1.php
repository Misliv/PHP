<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
    for ($i = 1; $i <= 20; $i++) {
        echo "<img src='../img/HazamaSprites/hz600_" . $i . ".jpg'> ";
}

    $a = array("603px-BBTag_Hazama_Portrait.png", "cmn_ch_b_brc.png", "Neo_Politan_2C_Character_Select_Artwork 29.png") ;
    foreach ($a as $crosstag => $character) {
        echo "<img src='../img/CrossTag/".$character."'>";
    }
?>
</body>
</html>