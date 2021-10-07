<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'h7login');

$username = "";
$errors = array();

function getUserById($id) {
    global $db;
    $query = "SELECT * FROM users WHERE id=".$id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

function e($val) {
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0) {
        echo  '<div class="error">';
        foreach ($errors as $error) {
            echo $error .'<br>';
        }
        echo '</div>';
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}
