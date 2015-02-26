<?php
include_once("config.php");
class Bid {
    function __construct(){

    }
    public function generateBidId()
    {
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $cursor=$collection->find()->limit(1);
        $cursor->sort(array('BidId'=>-1));
        $cursor=iterator_to_array($cursor);
        foreach($cursor as $key=>$value)
            $bid_id=intval($value['BidId']);
        if(isset($bid_id))
        {
            $_data['BidId']=++$bid_id;
            $cursor=$collection->insert($_data);
            return $bid_id;
        }else
            return 0;

    }
    public function insertProductForBid($bid_id,$product_info)
    {
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $cursor=$collection->findAndModify(array("BidId" =>$bid_id),array("products"=>$product_info));
        $cursor=iterator_to_array($cursor);
        echo json_encode($cursor);
    }
}
?>