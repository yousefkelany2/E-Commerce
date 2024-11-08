<?php 
session_start();
require "DB/connect.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 23:35:35 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="index.css" />

</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->



<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header navbar-area">

<div class="topbar">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="top-left">
<ul class="menu-top-link">
<li>
<div class="select-position">
<select id="select4">
<option value="0" selected>$ USD</option>
<option value="1">€ EURO</option>
<option value="2">$ CAD</option>
<option value="3">₹ INR</option>
<option value="4">¥ CNY</option>
<option value="5">৳ BDT</option>
</select>
</div>
</li>
<li>
<div class="select-position">
<select id="select5">
<option value="0" selected>English</option>
<option value="1">Español</option>
<option value="2">Filipino</option>
<option value="3">Français</option>
<option value="4">العربية</option>
<option value="5">हिन्दी</option>
<option value="6">বাংলা</option>
</select>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-middle">
<ul class="useful-links">
<li><a href="index.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-end">
<div class="user">
<i class="lni lni-user"></i>
Hello
</div>
<ul class="user-login">
<li>
<a href="login.php">Sign In</a>
</li>
<li>
<a href="register.php">Register</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="header-middle">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-7">

<a class="navbar-brand" href="index.php">
<img src="assets/images/logo/logo.svg" alt="Logo">
</a>

</div>
<div class="col-lg-5 col-md-7 d-xs-none">

<div class="main-menu-search">

<div class="navbar-search search-style-5">
<div class="search-select">
<div class="select-position">
<select id="select1">
<option selected>All</option>
<option value="1">option 01</option>
<option value="2">option 02</option>
<option value="3">option 03</option>
<option value="4">option 04</option>
<option value="5">option 05</option>
</select>
</div>
</div>
<div class="search-input">
<input type="text" placeholder="Search" class="key">
<div class="_search">
  <ul class="_print"></ul>
</div>
</div>
<div class="search-btn">
<button><i class="lni lni-search-alt"></i></button>
</div>
</div>

</div>

</div>
<div class="col-lg-4 col-md-2 col-5">
<div class="middle-right-area">
<div class="nav-hotline">
<i class="lni lni-phone"></i>
<h3>Hotline:
<span>(+100) 123 456 7890</span>
</h3>
</div>
<div class="navbar-cart">
<div class="wishlist">
<a href="javascript:void(0)">
<i class="lni lni-heart"></i>
<span class="total-items">0</span>
</a>
</div>


<div class="cart-items ">
<?php
    $id_user= $_SESSION["loginpro"]["id"]??0;    

$slect=$connect->query("SELECT *  FROM card WHERE userid='$id_user'");

$num_product=$slect->num_rows;


?>
<a href="javascript:void(0)" class="main-btn  card ">
<i class="lni lni-cart "></i>
 <span class="total-items _cart_count"><?=$num_product?></span>
</a>

<div class="shopping-item">
<div class="dropdown-cart-header">
    <span><?=$num_product?> Items</span>
    <a href="cart.php">View Cart</a>
</div>
<ul class="shopping-list  addcard card_total">
    <?php
    $sum=0;
    foreach($slect as $key => $val):
      $item= $val["productid"];
      $products=$connect->query("SELECT *  FROM products WHERE id='$item'");
      foreach($products as $product):
      $sum+=$val["count"]*$product["price"];    
    ?>
<li class='des' sum="<?=$sum?>">
<a  idpro="<?=$product["id"]?>" class="remove _delete" title="Remove this item"><i class="lni lni-close "></i></a>
<div class="cart-img-head">
<a class="cart-img" href="product-details.php?id=<?=$product["id"]?>">
<?php
$images=explode('/',$product["image"]);
echo " <img  src='admin/images/$images[0]' alt='#'>"  
?>  
<!-- <img src="assets/images/header/cart-items/item1.jpg" alt="#"> --></a>
</div>
<div class="content">
<h4><a href="product-details.php">
<?=$product["name"] ?></a></h4>
<p class="quantity"><span class="_count"><?=$val["count"]?></span>x - $<span class="amount _price"><?=$product["price"]?></span></p>
</div>
</li>
<?php 

endforeach;
endforeach;
?>

</ul>
<div class="bottom">
<div class="total">
<span>Total</span>
<span class="total-amount sum_total">$<?=$sum?></span>
</div>
<div class="button">
<a href="checkout.php" class="btn animate">Checkout</a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-6 col-12">
<div class="nav-inner">

<div class="mega-category-menu">
<span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
<ul class="sub-category">
<li><a href="product-grids.php">Electronics <i class="lni lni-chevron-right"></i></a>
<ul class="inner-sub-category">
<li><a href="product-grids.php">Digital Cameras</a></li>
<li><a href="product-grids.php">Camcorders</a></li>
<li><a href="product-grids.php">Camera Drones</a></li>
<li><a href="product-grids.php">Smart Watches</a></li>
<li><a href="product-grids.php">Headphones</a></li>
<li><a href="product-grids.php">MP3 Players</a></li>
<li><a href="product-grids.php">Microphones</a></li>
<li><a href="product-grids.php">Chargers</a></li>
<li><a href="product-grids.php">Batteries</a></li>
<li><a href="product-grids.php">Cables & Adapters</a></li>
</ul>
</li>
<li><a href="product-grids.php">accessories</a></li>
<li><a href="product-grids.php">Televisions</a></li>
<li><a href="product-grids.php">best selling</a></li>
<li><a href="product-grids.php">top 100 offer</a></li>
<li><a href="product-grids.php">sunglass</a></li>
<li><a href="product-grids.php">watch</a></li>
<li><a href="product-grids.php">man’s product</a></li>
<li><a href="product-grids.php">Home Audio & Theater</a></li>
<li><a href="product-grids.php">Computers & Tablets </a></li>
<li><a href="product-grids.php">Video Games </a></li>
<li><a href="product-grids.php">Home Appliances </a></li>
</ul>
</div>


<nav class="navbar navbar-expand-lg">
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<a href="index.php" class="active" aria-label="Toggle navigation">Home</a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item"><a href="about-us.php">About Us</a></li>
 <li class="nav-item"><a href="faq.php">Faq</a></li>
<li class="nav-item"><a href="login.php">Login</a></li>
<li class="nav-item"><a href="register.php">Register</a></li>
<li class="nav-item"><a href="mail-success.php">Mail Success</a></li>
<li class="nav-item"><a href="404.php">404 Error</a></li>
</ul>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
<ul class="sub-menu collapse" id="submenu-1-3">
<li class="nav-item"><a href="product-grids.php">Shop Grid</a></li>
<li class="nav-item"><a href="product-list.php">Shop List</a></li>
<li class="nav-item"><a href="product-details.php">shop Single</a></li>
<li class="nav-item"><a href="cart.php">Cart</a></li>
<li class="nav-item"><a href="checkout.php">Checkout</a></li>
</ul>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
<ul class="sub-menu collapse" id="submenu-1-4">
<li class="nav-item"><a href="blog-grid-sidebar.php">Blog Grid Sidebar</a>
</li>
<li class="nav-item"><a href="blog-single.php">Blog Single</a></li>
<li class="nav-item"><a href="blog-single-sidebar.php">Blog Single
Sibebar</a></li>
</ul>
</li>
<li class="nav-item">
<a href="contact.php" aria-label="Toggle navigation">Contact Us</a>
</li>




</ul>
</div> 
</nav>

</div>
</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="nav-social">
<h5 class="title">Follow Us:</h5>
<ul>
<li>
<a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
</li>
</ul>
</div>

</div>
</div>
</div>

</header>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });

    </script>
    <script src="jquery-3.7.1.min.js"></script>
    <?php
    include_once "script.php";
    
    ?>
<script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script>

