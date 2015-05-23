<?php
require_once('User.php');
require_once('Bid.php');
session_start();
if($_POST){
    $email=$_POST['email'];
    $password = $_POST['password'];
    $user=new User();
    if($fname=$user->login($email,$password))
    {
        $_SESSION['first_name']=$fname;
        $_SESSION['email']=$email;
        if(isset($_POST['redirect']))
        {
            $bid=new Bid();
            $bid_id=$_SESSION['BidId'];
            $bid->setEmailForBid($bid_id,$email);
            header('Location: checkout.php');
        }
        else
            header('Location: profile.php');
    }else
        header('Location: user_login.php');

}