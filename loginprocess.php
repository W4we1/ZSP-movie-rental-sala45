<?php
session_start ();
include("config.php");

if(isset($_REQUEST['sub']))
{
    $a=$_REQUEST['uname'];
    $b=$_REQUEST['upassword'];
    
    $res=mysqli_query($cser,"select* from users where uname='$a'and upassword='$b'");
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