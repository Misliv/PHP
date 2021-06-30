<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
        }
    </style>
</head>
<body>

<table>
<?php

$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query ) or die ("Error 1.");
$stmt->execute() or die ('Error 2.');

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo"<td>" . $row['cursistnr'] . "</td>";
    echo"<td>" . $row['naam'] . "</td>";
    echo"<td>" . $row['roepnaam'] . "</td>";
    echo"<td>" . $row['straat'] . "</td>";
    echo"<td>" . $row['postcode'] . "</td>";
    echo"<td>" . $row['plaats'] . "</td>";
    echo"<td>" . $row['geslacht'] . "</td>";
    echo"<td>" . $row['geb_datum'] . "</td>";
    echo "</tr>";

}

?>
</table>
</body>
</html>