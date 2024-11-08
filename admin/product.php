<?php
include "style/navbar.php";
include "style/slider.php";

if(!isset($_GET["product"])){
    include "includes/product/view.php";
}
elseif($_GET["product"]=="add"){
include "includes/product/form.php";
}
elseif($_GET["product"]=="edit"){
include "includes/product/edit.php";
}
include "style/footer.php";

?>