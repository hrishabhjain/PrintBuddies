<?php
session_start();
include_once('Bid.php');
if(isset($_GET['data']))
{
    $data=$_GET['data'];
    echo $data;
    if(isset($_SESSION['BidId']))
    {
        $bid=new Bid();
        $bid_id=$_SESSION['BidId'];
        echo "Bid : $bid_id";
            $bid->insertProductForBid($bid_id,$data);

    }else
    {
        $bid=new Bid();
        $bid_id=$bid->generateBidId();
        if($bid_id!=0)
            $_SESSION['BidId']=$bid_id;
        echo "Bid : $bid_id";
        $bid->insertProductForBid($bid_id,$data);
    }

}

?>