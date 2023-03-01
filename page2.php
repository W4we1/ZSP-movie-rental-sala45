<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
        require('config.php');
        if (isset($_REQUEST['email'])) {
            $name=stripslashes($_REQUEST['name']);
            $name=mysqli_real_escape_string($con,$name);
            $surname=stripslashes($_REQUEST['surname']);
            $surname=mysqli_real_escape_string($con,$surname);
            $email=stripslashes($_REQUEST['email']);
            $email=mysqli_real_escape_string($con,$email);
            $password=stripslashes($_REQUEST['password']);
            $password=mysqli_real_escape_string($con,$password);
                $query="INSERT INTO 'users' (name, surname, email, password) VALUES
                ('$name', '$surname', '$email', '$password')";
            $result=mysqli_query($con,$query);
            if($result){
                echo "<div class='form'>
                <h3>Rejestracja udana.</h3>
                <br>Naciśnij aby się zalogować <a href='login.php'></a></div>";
            }
        }else{
            ?>
        <div class="login">
        <h1>Rejestracja</h1>
            <form name="Rejestracja" action="" method="post">
            <input type="text" name="name" placeholder="Imię" required/>
            <input type="text"  name="surname" placeholder="Nazwisko" required/>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Hasło" required/>
            <input type="submit" name="submit" value="Rejestracja"/>
            </form>
        </div>
        <?php } ?>
    </body>
</html>