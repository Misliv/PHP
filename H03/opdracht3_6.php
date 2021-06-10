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
$zwemclub["De spartelkuikens "] = 25;
$zwemclub["De waterbuffels "] = 32;
$zwemclub["Plonsmderin "] = 11;
$zwemclub["Bommetje "] = 23;


foreach($zwemclub as $club => $club_leden) {

        echo "$club $club_leden<br>";
       if($club_leden % 5 == 5) {
           $club_leden="img src=../img/zwemmer.png";
       }
}

?>
</body>
</html>