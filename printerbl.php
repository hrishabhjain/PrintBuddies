<?php
session_start();
include_once('Bid.php');

if(isset($_GET['method']))
{
    $method=$_GET['method'];
    $bid=new Bid();
    if($method=='getExistingBid')
    {
        $bid->getExistingBid();
    }elseif($method=='getBidById')
    {
        $bid_id=$_GET['BidId'];
        $bid->getBidByIdForPrinter($bid_id);
    }elseif($method='getBidPrice')
    {
        $bid_id=$_GET['BidId'];
        $bid->getBidPrice($bid_id);
    }
}
?>