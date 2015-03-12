<?php
session_start();
include_once('Bid.php');

if($_GET['method'] && $_GET['timestamp'])
{
    $method=$_GET['method'];
    $timestamp=$_GET['timestamp']-'19800000';
    if($method=='createBid')
    {
        $bid=new Bid();
        $bid_id=$_SESSION['BidId'];
        $bid->createBid($bid_id,$timestamp);
        unset($_SESSION['BidId']);
    }
}
?>