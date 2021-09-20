<?php
try {
$dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', 'root', '');
foreach ($dbh->query('SELECT * FROM cursist') as $row) {
    print_r($row);
}
$dbh = null;
} catch (PDOException $e) {
    print "Error!: ".$e->getMessage()."<br/>";
    die();
}
?>