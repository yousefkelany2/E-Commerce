<?php
require "../../DB/connect.php";
$id=$_POST["id"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $prive = $_POST["access"];
    $url=$_SERVER["HTTP_REFERER"];
    $update= $connect->query("UPDATE  users SET 
    name='$name',
    email='$email',
    gender='$gender',
    prive='$prive' WHERE id='$id'
    ");
    if($update){
        header("location:../../user.php");
    }
    else{
        header("location:$url");
    }
}

?>