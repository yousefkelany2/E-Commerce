<?php
require "../../DB/connect.php";
$name = $_POST["name"]??"";
$select=$connect->query("SELECT * FROM products WHERE name LIKE '%$name%'");
if(!empty($name)){
    foreach($select as $key=> $selN){
        $name=$selN["name"];
        $id=$selN["id"];
        echo "<li>
       <a href='product-details.php?id=$id'>$name</a>
        </li>";
    }
    
} else{
    echo "";
}



?>