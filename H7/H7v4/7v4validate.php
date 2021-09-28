<?php

include_once ('7v4connection.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM userlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user) {

        if (($user['name'] == $name) &&
            ($user['password'] == $password)) {

            header("Location: 7v4userpage.php");

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $adminname = test_input($_POST["adminname"]);
            $password = test_input($_POST["password"]);
            $stmt = $conn->prepare("SELECT * FROM adminlogin");
            $stmt->execute();
            $users = $stmt->fetchAll();

            foreach ($users as $user) {

                if (($user['name'] == $adminname) &&
                    ($user['password'] == $password)) {

                    header("Location: 7v4adminpage.php");
                } else {
                    echo "Gegevens kloppen niet.";
                    die();
                }
            }
        }
    }
}