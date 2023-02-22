<?php
session_start ();
include("config.php");

if(isset($_REQUEST['sub']))
{
    $a=$_REQUEST['email'];
    $b=$_REQUEST['password'];
    
    $res=mysqli_query("select* from users where email='$a'and password='$b'");
    $result=mysqli_fetch_array($res);
    if($result)
    {
        $_SESSION["login"]="1";
        header("location:index.php");
    }
    else
    {
        header("location:login.php?err=1");
    }
}
?>