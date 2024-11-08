<?php
session_start();
require "../../DB/connect.php";
$user_id=$_SESSION["loginpro"]["id"];
$product_id=$_POST["product_id"];
$select=$connect->query("SELECT * FROM card WHERE productid='$product_id' AND userid='$user_id'");
$num_card=$select->num_rows;
if($num_card==0){
    $insert =$connect->query("INSERT INTO `card`( `productid`, `userid`, `count`) VALUES
    ('$product_id','$user_id','1')
    ");
}
else{
 $new_count=$select->fetch_assoc()["count"];
$connect->query("UPDATE `card` SET count= $new_count+1 WHERE productid='$product_id' AND userid='$user_id'");
}




$id_user= $_SESSION["loginpro"]["id"]??"0";    
$slect=$connect->query("SELECT *  FROM card WHERE userid='$id_user'");

$num_product=$slect->num_rows;
$sum=0;
foreach($slect as $key => $val):
$item= $val["productid"];
$products=$connect->query("SELECT *  FROM products WHERE id='$item' ");
  
 foreach($products as $product):
    $product_id=$product["id"];
    $product_image=$product["image"];
    $product_name=$product["name"];
    $product_price=$product["price"];
    $val_count=$val["count"];
    $images=explode('/',$product_image);
    $sum+=$val["count"]*$product["price"];

 echo "<li class='des total' sum='$sum'>
<a idpro='$product_id' class='remove _delete'  title='Remove this item'><i class='lni lni-close'></i></a>
<div class='cart-img-head'>
<a class='cart-img' href='product-details.php?id=$product_id'>


 <img  src='admin/images/$images[0]' alt='#'> </a> 
 

</div>
<div class='content'>
<h4><a href=product-details.html>
$product_name</a></h4>
<p class='quantity'><span class='_count'>$val_count</span>x - $<span class='amount _price'> $product_price</span></p>
</div>
</li>" ;

 endforeach;
 endforeach;


 
