<?php
    session_start();
    $host = "localhost:3306";
    $user = "root";
    $password = "";
    $dbname = "phpschool";

    $con = mysqli_connect($host, $user, $password, $dbname);
    if (!$con) {
        die("Connection failed: ".mysqli_connect_error());
    }
