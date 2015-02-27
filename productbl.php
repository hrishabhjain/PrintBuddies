<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
include_once("Product.php");

if(isset($_GET['id']))
{
    $productId=$_GET['id'];
    $product_info=new Product();
    $product_info=$product_info->getProductInfo($productId);
    echo $product_info;
}
?>