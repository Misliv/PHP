<?php

if ($_POST['voornaam'] == "") {
    echo "Je moet nog een naam invullen! ";
    echo "<a href=\"5_2.html\">Terug naar het formulier</a>";
} else {
    echo $_POST ['voornaam'];
}

if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen! ";
    echo "<a href=\"5_2.html\">Terug naar het formulier</a>";
} else {
    echo $_POST['adres'];
}

if ($_POST['email'] == "") {
    echo "Je moet nog een email invullen! ";
    echo "<a href=\"5_2.html\">Terug naar het formulier</a>";
} else {
    echo $_POST['email'];
}

if ($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen! ";
    echo "<a href=\"5_2.html\">Terug naar het formulier</a>";
} else {
    echo $_POST['wachtwoord'];
}

