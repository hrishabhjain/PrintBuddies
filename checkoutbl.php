<?php
session_start();
include_once('Bid.php');

if($_GET['method'] && $_GET['timestamp'])
{
    $method=$_GET['method'];
    $timestamp=$_GET['timestamp']-'19800000';
    if($method=='createBid' && isset($_GET['city']))
    {
        $bid=new Bid();
        $bid_id=$_SESSION['BidId'];
        $city=$_GET['city'];
        $value=$bid->createBid($bid_id,$timestamp,$city);
        if($value)
        {
            unset($_SESSION['BidId']);
            return true;
        }else
            return false;
    }
}
?>