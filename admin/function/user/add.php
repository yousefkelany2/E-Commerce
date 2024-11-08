<?php
require "../../DB/connect.php";
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$prive = $_POST["access"];
$url=$_SERVER["HTTP_REFERER"];
$pass_hash=password_hash($password,PASSWORD_DEFAULT);

$insert=$connect->query("INSERT INTO users
(`name`, `email`, `password`, `gender`, `prive`)
VALUES
('$name','$email','$pass_hash','$gender','$prive')
");
if($insert){
    header("location:../../user.php");
}
else{
    header("location:$url");
}

?>