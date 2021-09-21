<?php
include "6_2config.php";

if (isset($_POST['but_submit'])){
    $email = mysqli_real_escape_string($con, $_POST['txt_email']);
    $wachtwoord = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($email != "" && $wachtwoord != "") {
        $sql_query = "select count(*) as cntUser from login where email = '".$email."' and wachtwoord ='".$wachtwoord."'";
        $result =   mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['email'] = $email;
            header('Location: 6_2welkom.php');
        } else {
            echo "Email en/of wachtwoord kloppen niet.";
        }
    }
}
?>
<html>
<style>

</style>
<body>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_email" name="txt_email" placeholder="Email"/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_email" name="txt_pwd" placeholder="Wachtwoord"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>