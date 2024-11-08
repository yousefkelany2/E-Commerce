<?php
include "style/navbar.php";
include "style/slider.php";

if(!isset($_GET["user"])){
    include "includes/user/view.php";
}
elseif($_GET["user"]=="add"){
include "includes/user/add.php";
}
elseif($_GET["user"]=="edit"){
include "includes/user/edit.php";
}
include "style/footer.php";

?>