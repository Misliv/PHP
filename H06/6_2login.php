<?php
    session_start();
    require_once "6_2config.php";

        $email = $wachtwoord = "";
        $email_err = $wachtwoord_err = $login_err = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty(trim($_POST["email    "]))){
                $email_err = "Zet een email in.";
            } else {
                $email = trim($_POST['email']);
            }
        if (empty(trim($_POST["wachtwoord"]))) {
            $wachtwoord_err = "Zet een wachtwoord in.";
        } else {
            $wachtwoord = trim($_POST['wachtwoord']);
        }
    }

        if (empty($email_err) && empty($wachtwoord_err)) {
            $sql = "SELECT email, wachtwoord FROM login WHERE email = ?";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = $email;

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);

                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        mysqli_stmt_bind_result($stmt, $username, $hashed_wachtwoord);
                        if(mysqli_stmt_fetch($stmt)) {
                            if (password_verify($wachtwoord, $hashed_wachtwoord)) {
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["email"] = $email;

                                header("location: welkom.php");
                            } else {
                                $login_err = "Email en/of wachtwoord kloppen niet.";
                            }
                        }
                    } else {
                        $login_err = "Email en/of wachtwoord kloppen niet.";
                    }
                } else {
                    echo "Oh nee! Iets ging verkeerd. Probeer nog een keer later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inlogformulier</title>
</head>
<body>
<form action="6_2response.php" method="get" id="container">
    Email <input placeholder="Email" type="email" name="email" id="email" required><br>
    Wachtwoord <input placeholder="Wachtwoord" type="password" name="wachtwoord" id="wachtwoord" required><br>
    <input type="submit" name="knop" value="verstuur">

</form>
</body>
</html>
