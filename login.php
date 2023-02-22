<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <center>
    <fieldset>
        <div id="login">
            <legend><h1>Login</h1></legend>
        <form action="loginprocess.php" method="POST"><br><br>
            Email:<br><input type="text" required="" name="email"><br><br>
            Password:<input type="text" required="" name="password"><br><br>
            <input type="submit" value="Login" name="sub">
            <br>
            <?php
            if(isset($REQUEST["err"]))
                $msg="Invalid email or password";
            ?>
            <p style="color:red;">
            <?php if(isset($msg))

    echo $msg

                ?>
            </p>
        </form>
        </div>
        </fieldset>
    </center>
</html>