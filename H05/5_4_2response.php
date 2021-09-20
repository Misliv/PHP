<?php
$loggedIn = false;
if ($_GET != null) {
    $email = $_GET["email"];
    $wachtwoord = $_GET["wachtwoord"];
    login($email, $wachtwoord);
}
function login ($email, $wachtwoord)
{
    if ($email == "piet@worldonline.nl" && $wachtwoord == "doetje123" || $email == "klaas@carpets.nl" && $wachtwoord == "snoepje777" ||
        $email == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201") {
        $loggedIn = true;
        if ($loggedIn) {
            echo 'Welkom';
        }
    } else {
        $loggedIn = false;
        if (!$loggedIn) {
            echo "Geen toegang.";}
    }
}