<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        body {
            float: left;
        }
    </style>
</head>
<body>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plonsmderin = 11;
$bommetje = 23;

$clubs = array($spartelkuikens, $waterbuffels, $plonsmderin, $bommetje);

function doTheEcho($number) {
    for($i = 0; $i < $number; $i++) {
        echo "<img src='../img/zwemmer.png'>";
    }
}

foreach($clubs as $club) {
    echo "$club ";

    switch ($club) {
        case $club < 5:
            doTheEcho(0);
            break;

        case $club < 10:
            doTheEcho(1);
            break;

        case $club < 15:
            doTheEcho(2);
            break;

        case $club < 20:
            doTheEcho(3);
            break;

        case $club < 25:
            doTheEcho(4);
            break;

        case $club < 30:
            doTheEcho(5);
            break;

        case $club < 35:
            doTheEcho(6);
            break;

    }

}

?>
</body>
</html>