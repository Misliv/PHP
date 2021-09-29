<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'phpschool');

$username = "";
$email = "";
$errors = array();

function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
        foreach ($errors as $error){
            echo $error .'<br>';
        }
        echo '</div>';
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

if (isset($_POST['submit'])) {
    login();
}

function login() {
    global $db, $username, $errors;

    $username = e($_POST['username']);
    $password = e($_POST['password']);

    if (empty($username)) {
        array_push($errors, "Vul een naam in.");
    }
    if (empty($password)) {
        array_push($errors, "Vul een wachtwoord in.");
    }
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM login7 WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "Je bent ingelogd";
                header('location: home.php');
            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "Je bent ingelogd";
                header('location: home.php');
            }
        } else {
            array_push($errors, "Gebruikersnaam en/of wachtwoord kloppen niet");
        }
    }
}

function isAdmin() {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}
