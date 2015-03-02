<?php
session_start();
include_once('Bid.php');

if($_GET['method']=='getBidById')
if(isset($_SESSION['user']))
{
    $bid=new Bid();
}elseif(isset($_SESSION['BidId']))
{
    $bid=new Bid();
    $bid_id=$_SESSION['BidId'];
    $bid->getBidById($bid_id);

}else
    echo "No Bids";

?>