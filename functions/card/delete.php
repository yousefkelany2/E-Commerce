<?php
require "../../DB/connect.php";
$product_id=$_POST["product_id"];
$url=$_SERVER["HTTP_REFERER"];
$delete=$connect->query("DELETE FROM card WHERE productid='$product_id'");

?>