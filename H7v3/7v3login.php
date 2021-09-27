<?php
include "7v3config.php";

if (isset($_POST['but_submit'])){
    $username = mysqli_real_escape_string($con, $_POST['txt_username']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($username != "" && $password != "") {
        $sql_query = "select count(*) as cntUser from login7 where username = '".$username."' and password ='".$password."'";
        $result =   mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $username;
            header('Location: 7v3welkom.php ');
        } else {
            echo "Gebruikersnaam en/of wachtwoord kloppen niet.";
        }
    }
}
?>
<html>
<body>
<div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_username" name="txt_username" placeholder="Username" required/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" required/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>