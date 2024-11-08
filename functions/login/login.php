<?php
require "../../DB/connect.php";
session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$url=$_SERVER["HTTP_REFERER"];
$select=$connect->query("SELECT * FROM users WHERE email='$email'");
$num_email=$select->num_rows;
$user=$select->fetch_assoc();
if($num_email==1){
    
    if(password_verify($password,$user["password"])){
       
       $_SESSION["loginpro"]=$user;
      header("location:../../index.php");
    }
    else{
       header("location:$url");
    }
}
else{
    header("location:$url");
}
?>