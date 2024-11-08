<?php
require "../../DB/connect.php";
$id=$_GET["id"];
$url = $_SERVER['HTTP_REFERER'];
$file_C= (explode("/",$url));
if($file_C[6]=="user.php"){

$delete=$connect->query("DELETE FROM users WHERE id='$id'");
if($delete)
{
    header("location:../../user.php");
}
else{
    header("location:$url");
}
}
?>