<?php
$loggedIn = false;
if ($_GET != null) {
    $email = $_GET["email"];
    $password = $_GET["password"];
    login($email, $password);
}
function login($email, $password) {
    if ($email == "piet@worldonline.nl" && $password == "doetje123" || $email == "klaas@carpets.nl" && $password == "snoepje777" || $email == "truushendriks@wegweg.nl" && $password == "arkiearkie201") {
        $loggedIn = true;
        if ($loggedIn) {
            echo 'Welkom';
        }
    } else {
        $loggedIn = false;
        if (!$loggedIn) {
            echo 'Sorry, geen toegang!';
        }
    }
}