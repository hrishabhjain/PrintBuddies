<?php
session_start();
include_once('Bid.php');

if(isset($_GET['method']))
{
    $email=$_SESSION['email'];
    $method=$_GET['method'];
    $bid=new Bid();
    if($method=='getActiveBid')
    {
        $bid->getBidByEmail($email,'1');
    }elseif($method=='getIncompleteBid'){
        $bid->getBidByEmail($email,'0');
    }elseif($method=='getCompleteBid'){
        $bid->getBidByEmail($email,'2');
    }elseif($method=='getBidById')
    {
        $bid_id=$_GET['BidId'];
        $bid->getBidByIdForPrinter($bid_id);
    }elseif($method=='getSession')
    {
        echo json_encode($_SESSION);
    }elseif($method=='setSessionBidId'){
        $_SESSION['BidId']=$_GET['id'];
        var_dump($_SESSION);
    }
}
?>