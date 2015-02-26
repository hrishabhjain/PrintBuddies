<?php
include_once("config.php");
class Product {
    function __construct(){

    }
    public function getProductInfo($id)
    {
        try{
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        }catch (Exception $e){
            echo $e;
            echo "Could not connect to Mongo Server";
            return;
        }
        $db = $conn->print_buddies;
        $collection=$db->products;
        $cursor=$collection->find(array("_id" =>$id));
        $cursor=iterator_to_array($cursor);
        return json_encode($cursor);
    }
}

