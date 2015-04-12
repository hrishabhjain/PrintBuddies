<?php
require_once('User.php');
session_start();
if($_POST){
    $email=$_POST['email'];
    $password = $_POST['password'];
    $user=new User();
    if($user->login($email,$password))
    {
        if(isset($_POST['redirect']))
            header('Location: checkout.php');
        else
            header('Location: profile.php');
    }else
        header('Location: user_login.php');

}