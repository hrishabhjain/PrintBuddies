<?php
include_once("config.php");
include_once('mysqlclass.php');
class Bid {
    function __construct(){

    }
    public function generateBidId()
    {
        try{
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
        }catch (Exception $e){
            echo json_encode('Could not run query on the Server');
            return 0;
        }
    }
    public function insertFirstProductForBid($bid_id,$product_info,$email)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $bid['_id']=$bid_id;
            $bid['date']=null;
            $bid['city']=null;
            $bid['email']=$email;
            $bid['products'][0]=$product_info;
            $bid['bids'][0]=null;
            $cursor=$collection->insert($bid);
            echo json_encode($cursor);
        }catch (Exception $e){
            echo json_encode('Could not run query on the Server');
        }

    }
    public function insertProductForBid($bid_id,$product_info)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $cursor=$collection->findAndModify(array("_id" =>$bid_id),array('$push'=>array("products"=>$product_info)));
            echo json_encode($cursor);
        }catch (Exception $e){
            echo json_encode('Could not run query on the Server');
        }

    }
    public function getBidById($bid_id)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $cursor=$collection->find(array("_id" =>$bid_id),array("products"=>1,'date'=>1))->limit(1);
            $cursor=iterator_to_array($cursor);
            echo json_encode($cursor);
        }catch (Exception $e){
            echo "Could not connect to Mongo Server";
            return;
        }
    }
    public function createBid($bid_id,$timestamp,$city)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $cursor=$collection->findAndModify(array("_id" =>$bid_id),array('$set'=>array("date"=>$timestamp,"city"=>$city)));
            echo true;
        }catch (Exception $e){
            return false;
        }

    }
    public function setEmailForBid($bid_id,$email)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $cursor=$collection->findAndModify(array("_id" =>$bid_id),array('$set'=>array("email"=>$email)));
            return json_encode($cursor);
        }catch (Exception $e){
            return json_encode('Could not run query on the Server');
        }
    }
    public function getExistingBid()
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $timestamp=time()*1000;
            $cursor=$collection->find(array('date' => array( '$gt' =>$timestamp)),array('products'=>1,'date'=>1))->sort(array('date'=>-1))->limit(25);
            $cursor=iterator_to_array($cursor);
            echo json_encode($cursor);
        }catch (Exception $e){
            echo $e;
            echo json_encode('Could not run query on the Server');
        }
    }
    public function getPreviousBid()
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $timestamp=time()*1000;
            $cursor=$collection->find(array('date' => array( '$lt' =>$timestamp)),array('products'=>1,'date'=>1))->sort(array('_id'=>-1))->limit(25);
            $cursor=iterator_to_array($cursor);
            echo json_encode($cursor);
        }catch (Exception $e){
            echo $e;
            echo json_encode('Could not run query on the Server');
        }
    }
    public function getBidByIdForPrinter($bid_id)
    {
        try{
            $conn = new MongoClient(MONGO_PRODUCT_IP);
            $db = $conn->print_buddies;
            $collection=$db->Bids;
            $cursor=$collection->find(array('_id' =>intval($bid_id)),array("products"=>1,'date'=>1));
            $cursor=$cursor->sort(array("date"=>-1));
            $cursor=iterator_to_array($cursor);
            echo json_encode($cursor);
        }catch (Exception $e){
            echo "Could not connect to Mongo Server";
            return;
        }
    }
    public function getBidPrice($bid_id)
    {
        $json_data=array();
        try{

            $mysql = new MySql();
            $import="SELECT * FROM `bids` WHERE `bidId`=$bid_id ORDER BY `bids`.`price` ";
            $response = $mysql->executeQuery($import);
            //$mysql->write_log($import);

            for($i=0;$row = mysqli_fetch_row($response);$i++){
                $json_data[$i]['Username']=$row[0];
                $json_data[$i]['BidId']=$row[1];
                $json_data[$i]['Price']=$row[2];
                $json_data[$i]['OnTime']=$row[3];
            }
            echo json_encode($json_data);

        }catch (Exception $error){

            $mysql=new MySql();
            $mysql->write_Exception($error);
        }
    }
    public function postBid($bid_id,$printer,$price,$ontime)
    {
        $json_data=array();
        try{

            $mysql = new MySql();
            $import="SELECT * FROM `bids` WHERE `bidId`='$bid_id' AND `username`='$printer'";
            $response = $mysql->executeQuery($import);
            //$mysql->write_log($import);

            $rows = mysqli_num_rows($response);
            if ($rows == 1){
                $import="UPDATE `bids` SET `price`='$price',`on-time`='$ontime' WHERE `username`='$printer' AND `bidId`='$bid_id';";
            }else
                $import="INSERT INTO `bids`(`username`, `bidId`, `price`, `on-time`) VALUES ('$printer','$bid_id','$price','$ontime')";

            $response = $mysql->executeQuery($import);
            //$mysql->write_log($import);
            //$row = mysqli_fetch_row($response);
            echo json_encode($response);

        }catch (Exception $error){

            $mysql=new MySql();
            $mysql->write_Exception($error);
        }
    }
    public function getBidByEmail($email,$activity_code)
    {try{
        $conn = new MongoClient(MONGO_PRODUCT_IP);
        $db = $conn->print_buddies;
        $collection=$db->Bids;
        $timestamp=time()*1000;
        if($activity_code=='1')
            $cursor=$collection->find(array('date' => array( '$gt' =>$timestamp),'email'=>$email),array('products'=>1,'date'=>1))->sort(array('_id'=>-1))->limit(25);
        elseif($activity_code=='0')
            $cursor=$collection->find(array('date' => array( '$eq' =>null),'email'=>$email),array('products'=>1,'date'=>1))->sort(array('_id'=>-1))->limit(25);
        else
            $cursor=$collection->find(array('date' => array( '$lt' =>$timestamp),'email'=>$email),array('products'=>1,'date'=>1))->sort(array('_id'=>-1))->limit(25);

        $cursor=iterator_to_array($cursor);
        echo json_encode($cursor);
    }catch (Exception $e){
        //echo $e;
        echo json_encode('Could not run query on the Server');
    }

    }
}
?>