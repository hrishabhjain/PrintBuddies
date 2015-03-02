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
        $cursor->sort(array('_id'=>-1));
        $cursor=iterator_to_array($cursor);
        foreach ($cursor as $key1 )
        {
            $bid_id=intval($key1['_id'])+1;
            break;
        }
        if(isset($bid_id))
        {
            $_data['_id']=$bid_id;
            echo $_data['_id'];
            return $bid_id;
        }else
            return 0;

    }
    public function insertFirstProductForBid($bid_id,$product_info)
    {
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $bid['_id']=$bid_id;
        $bid['date']=null;
        $bid['products'][0]=$product_info;
        $cursor=$collection->insert($bid);
        echo json_encode($cursor);
    }
    public function insertProductForBid($bid_id,$product_info)
    {
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $cursor=$collection->findAndModify(array("_id" =>$bid_id),array('$push'=>array("products"=>$product_info)));
        echo json_encode($cursor);
    }
    public function getBidById($bid_id)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
        }catch (Exception $e){
            echo "Could not connect to Mongo Server";
            return;
        }
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $cursor=$collection->find(array("_id" =>$bid_id),array("products"=>1))->limit(1);
        $cursor=iterator_to_array($cursor);
        echo json_encode($cursor);
    }
}
?>