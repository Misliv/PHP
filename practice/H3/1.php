<?php
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdrachten</title>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++) {
    echo "<img src='../img/apen/aap".$i.".jpg'>";
}

$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");

foreach($bomen as $boom) {
    echo "<img src='../img/bomen/".$boom."'>";
}
?>
</body>
</html>