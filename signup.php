<?php
session_start();
require_once('User.php');
if($_POST)
{
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if($password != $repassword)
    {
        echo "<script>alert('Password not match');</script>";
        header('Location: user_login.php');
    }
    $email=$_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];


    $user = new User();
    if($user->signup($email,$first_name,$last_name,$phone,$password))
    {
        $_SESSION['first_name']=$first_name;
        $_SESSION['email']=$email;
        header('Location: profile.php');
    }else
        header('Location: user_login.php');

}