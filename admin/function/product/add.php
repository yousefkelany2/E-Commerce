<?php
require "../../DB/connect.php";
$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$cate=$_POST["cate"];
$images=$_FILES["img"];
$url =$_SERVER["HTTP_REFERER"];
$upload_image=[];
foreach($images["name"] as $key=> $val){
    $path=pathinfo($images["name"][$key],PATHINFO_EXTENSION);
    $ex=["jpg","jfif","png","jpeg","avif"];
    if(in_array($path,$ex)){
        $new_name=md5(uniqid()).".".$path;
        if(move_uploaded_file($images["tmp_name"][$key],"../../images/$new_name" )){
            $upload_image[]=$new_name;
        }
    }
}
if(!empty($upload_image)){
    $image=implode('/',$upload_image);
    $insert=$connect->query("INSERT INTO products 
    ( `name`, `price`, `sale`, `count`, `catogory`, `image`)
    VALUES
    ('$name','$price','$sale','$count','$cate','$image')");
    if($insert){
        header("location:../../product.php");
    }
    else{
        header("location:$url");
    }
}
else{
    header("location:$url");
}


?>