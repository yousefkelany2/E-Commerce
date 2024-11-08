<?php
require "../../DB/connect.php";
$url = $_SERVER['HTTP_REFERER'];
$file_C= (explode("/",$url));
print_r( $file_C[6]);
if($file_C[6]=="product.php"){
    $id= $_GET["id"];
    $sel_image=$connect->query("SELECT image FROM products WHERE id='$id'  ")->fetch_assoc();
    $del_image=$sel_image["image"];
    $last_image =explode("/",$del_image);
    $delete=$connect->query("DELETE FROM products WHERE id= '$id'");
    if($delete){
        foreach($last_image as $img){
            unlink("../../images/$img");
        }
        header("location:../../product.php");
    }
    else{
        header("location:$url");
    }
}
?>