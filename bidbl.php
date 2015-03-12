<?php
session_start();
include_once('Bid.php');
if(isset($_GET['data']))
{
    $data=$_GET['data'];
    $data=json_decode($data,true);
    $bid=new Bid();

    if(isset($_SESSION['email']))
        $email=$_SESSION['email'];
    else
        $email=null;
    if(isset($_SESSION['BidId']))
    {
        $bid_id=$_SESSION['BidId'];
        $bid->insertProductForBid($bid_id,$data);

    }else
    {
        $bid_id=$bid->generateBidId();
        if($bid_id!=0)
            $_SESSION['BidId']=$bid_id;
        $bid->insertFirstProductForBid($bid_id,$data,$email);
    }

}

?>