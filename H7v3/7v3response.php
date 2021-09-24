<?php
$dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', 'root', '');
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
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
