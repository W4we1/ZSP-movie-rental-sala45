<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="SELECT email, password FROM users";
    
}