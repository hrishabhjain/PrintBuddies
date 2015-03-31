<?php
require_once('User.php');
session_start();
if($_POST){
    $email=$_POST['email'];
    $password = $_POST['password'];
    $user=new User();
    if($user->login($email,$password))
    {
        header('Location: profile.php');
    }

}