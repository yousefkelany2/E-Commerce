<?php
require "../../DB/connect.php";
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$cate=$_POST["cate"];
$image=$_FILES["img"];
$url =$_SERVER["HTTP_REFERER"];
$old_image=$_POST["oldimage"];
$last_image =explode("/",$old_image);
$upload_image=[];

if($image["size"][0]==0){
    $update=$connect->query("UPDATE products SET 
    name='$name',
    price='$price',
    sale='$sale',
    count='$count',
    catogory='$cate' WHERE id='$id'
    ");
    if($update){
        header("location:../../product.php");
    }
    else{
        header("location:$url");
    }
}
else{
    $uploaded_images = [];

    foreach($image["name"] as $key => $val) {
        $path = pathinfo($image["name"][$key], PATHINFO_EXTENSION);
        $ex = ["jpg", "png", "gif", "jpeg"];
        if (in_array($path, $ex)) {
            $new_name = md5(uniqid()) . "." . $path;
            if (move_uploaded_file($image["tmp_name"][$key], "../../images/$new_name")) {
                $uploaded_images[] = $new_name;
            }
        }
    }
    
    if (!empty($uploaded_images)) { 
       $images = implode('/', $uploaded_images);
       
    
        $update= $connect->query("UPDATE products SET 
         name= '$name'
        ,price='$price'
        ,sale='$sale'
         ,count='$count'
         ,catogory='$cate'
         ,image='$images' WHERE id='$id'
        
        ");
      
        
        if ($update) {
            foreach ($last_image as $key => $val) {
             unlink("../../images/$val");
            }
            header("location:../../product.php");
        } else {
          
          header("location:$url");
       } 
        
    
}
else {
          
    header("location:$url");
 } 
}
?>