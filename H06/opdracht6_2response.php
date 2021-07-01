<?php
$email = $_POST["email"];
$pass = $_POST["wachtwoord"];

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

    foreach ($conn->query("SELECT * FROM user WHERE email='" . $email . "'") as $row) {
        if ($row["email"] == $email && $row["wachtwoord"] == $pass) {
            echo "Welkom!";
        } else {
            echo "Geen toegang!";
        }
    }
