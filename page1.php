<?php
session_start ();
if(!isset($_SESSION["login"]))
    header("location:login.php");
?>
<h1>Witaj na 1 stronie!</h1>
<a href="page1.php"><h2><font color="">STRONA 1</font></h2></a>
<a href="page2.php"><h2><font color="">STRONA 2</font></h2></a>
<a href="page3.php"><h2><font color="">STRONA 3</font></h2></a>
<a href="logaut.php"><h2><font color="red">Wylogowanie</font></h2></a>
<a href="logaut.php"><h2><font color="red">Wylogowanie</font></h2></a>