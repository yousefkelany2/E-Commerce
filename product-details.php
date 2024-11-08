<?php 
include_once "style/navbar.php";
?>

<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Single Product</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="index-2.php"><i class="lni lni-home"></i> Home</a></li>
<li><a href="index-2.php">Shop</a></li>
<li>Single Product</li>
</ul>
</div>
</div>
</div>
</div>


<section class="item-details section">
<div class="container">
<?php 

$id =$_GET["id"];
$products=$connect->query("SELECT * FROM products WHERE id='$id'");

foreach($products as $product):
$images=explode('/',$product["image"]);

?>


<div class="top-area">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12 col-12">

<div class="product-images">
<main id="gallery">

<div class="main-img">
<?php  echo " <img width=250 height=250  src='admin/images/$images[0]' alt='#  id='current''>"?>
<!-- //<img src="assets/images/product-details/01.jpg" id="current" alt="#"> -->
</div>
<div class="images">
<?php
 foreach($images as $image){
      echo " <img src='admin/images/$image' alt='#' class='img'> " ;
 }
 ?>

</div>
</main>
</div>
</div>
<div class="col-lg-6 col-md-12 col-12">
<div class="product-info">
<h2 class="title"><?=$product["name"]?></h2>
<p class="category"><i class="lni lni-tag"></i> Drones:<a href="javascript:void(0)">Action
<?=$product["name"]?></a></p>
<h3 class="price">$<?php 
$discount=$product["price"]*($product["sale"]/100);
$sale=$product["price"] -$discount;
echo $sale;  
?><span>$<?=$product["price"]?></span></h3>
<p class="info-text"><?=$product["catogory"]?></p>
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="form-group color-option">
<label class="title-label" for="size">Choose color</label>
<div class="single-checkbox checkbox-style-1">
<input type="checkbox" id="checkbox-1" checked>
<label for="checkbox-1"><span></span></label>
</div>
<div class="single-checkbox checkbox-style-2">
<input type="checkbox" id="checkbox-2">
<label for="checkbox-2"><span></span></label>
</div>
<div class="single-checkbox checkbox-style-3">
<input type="checkbox" id="checkbox-3">
<label for="checkbox-3"><span></span></label>
</div>
<div class="single-checkbox checkbox-style-4">
<input type="checkbox" id="checkbox-4">
<label for="checkbox-4"><span></span></label>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="form-group">
<label for="color">Battery capacity</label>
<select class="form-control" id="color">
<option>5100 mAh</option>
<option>6200 mAh</option>
<option>8000 mAh</option>
</select>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="form-group quantity">
<label for="color">Quantity</label>
<select class="form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
</div>
</div>
<div class="bottom-content">
<div class="row align-items-end">
<div class="col-lg-4 col-md-4 col-12">
<div class="button cart-button">
<button class="btn" style="width: 100%;">Add to Cart</button>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="wish-button">
<button class="btn"><i class="lni lni-reload"></i> Compare</button>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="wish-button">
<button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php endforeach ?>
<div class="product-details-info">
<div class="single-block">
<div class="row">
<div class="col-lg-6 col-12">
<div class="info-body custom-responsive-margin">
<h4>Details</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
<h4>Features</h4>
<ul class="features">
<li>Capture 4K30 Video and 12MP Photos</li>
<li>Game-Style Controller with Touchscreen</li>
 <li>View Live Camera Feed</li>
<li>Full Control of HERO6 Black</li>
<li>Use App for Dedicated Camera Operation</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="info-body">
<h4>Specifications</h4>
<ul class="normal-list">
<li><span>Weight:</span> 35.5oz (1006g)</li>
<li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
<li><span>Maximum Distance:</span> Up to 9,840ft (3,000m)</li>
<li><span>Operating Frequency:</span> 2.4GHz</li>
<li><span>Manufacturer:</span> GoPro, USA</li>
</ul>
<h4>Shipping Options:</h4>
<ul class="normal-list">
<li><span>Courier:</span> 2 - 4 days, $22.50</li>
<li><span>Local Shipping:</span> up to one week, $10.00</li>
<li><span>UPS Ground Shipping:</span> 4 - 6 days, $18.00</li>
<li><span>Unishop Global Export:</span> 3 - 4 days, $25.00</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-12">
<div class="single-block give-review">
<h4>4.5 (Overall)</h4>
<ul>
<li>
<span>5 stars - 38</span>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
</li>
<li>
<span>4 stars - 10</span>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star"></i>
</li>
<li>
<span>3 stars - 3</span>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star"></i>
<i class="lni lni-star"></i>
</li>
<li>
<span>2 stars - 1</span>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star"></i>
<i class="lni lni-star"></i>
<i class="lni lni-star"></i>
</li>
<li>
<span>1 star - 0</span>
<i class="lni lni-star-filled"></i>
<i class="lni lni-star"></i>
 <i class="lni lni-star"></i>
<i class="lni lni-star"></i>
<i class="lni lni-star"></i>
</li>
</ul>

<button type="button" class="btn review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
Leave a Review
</button>
</div>
</div>
<div class="col-lg-8 col-12">
<div class="single-block">
<div class="reviews">
<h4 class="title">Latest Reviews</h4>

<div class="single-review">
<img src="assets/images/blog/comment1.jpg" alt="#">
<div class="review-info">
<h4>Awesome quality for the price
<span>Jacob Hammond
</span>
</h4>
<ul class="stars">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
tempor...</p>
</div>
</div>


<div class="single-review">
<img src="assets/images/blog/comment2.jpg" alt="#">
<div class="review-info">
<h4>My husband love his new...
<span>Alex Jaza
</span>
</h4>
<ul class="stars">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
tempor...</p>
</div>
</div>


<div class="single-review">
<img src="assets/images/blog/comment3.jpg" alt="#">
<div class="review-info">
<h4>I love the built quality...
<span>Jacob Hammond
</span>
</h4>
 <ul class="stars">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
tempor...</p>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="review-name">Your Name</label>
<input class="form-control" type="text" id="review-name" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="review-email">Your Email</label>
<input class="form-control" type="email" id="review-email" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="review-subject">Subject</label>
<input class="form-control" type="text" id="review-subject" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="review-rating">Rating</label>
<select class="form-control" id="review-rating">
<option>5 Stars</option>
<option>4 Stars</option>
<option>3 Stars</option>
<option>2 Stars</option>
<option>1 Star</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label for="review-message">Review</label>
<textarea class="form-control" id="review-message" rows="8" required></textarea>
</div>
</div>
<div class="modal-footer button">
<button type="button" class="btn">Submit Review</button>
</div>
</div>
</div>
</div>


<footer class="footer">

<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-3 col-md-4 col-12">
<div class="footer-logo">
<a href="index-2.php">
<img src="assets/images/logo/white-logo.svg" alt="#">
</a>
</div>
</div>
<div class="col-lg-9 col-md-8 col-12">
<div class="footer-newsletter">
<h4 class="title">
Subscribe to our Newsletter
<span>Get all the latest information, Sales and Offers.</span>
</h4>
<div class="newsletter-form-head">
<form action="#" method="get" target="_blank" class="newsletter-form">
<input name="EMAIL" placeholder="Email address here..." type="email">
<div class="button">
<button class="btn">Subscribe<span class="dir-part"></span></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="footer-middle">
<div class="container">
<div class="bottom-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-12">

<div class="single-footer f-contact">
<h3>Get In Touch With Us</h3>
<p class="phone">Phone: +1 (900) 33 169 7720</p>
<ul>
<li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
<li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
</ul>
<p class="mail">
<a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#790a0c0909160b0d390a1116091e0b101d0a571a1614"><span class="__cf_email__" data-cfemail="4e3d3b3e3e213c3a0e3d26213e293c272a3d602d2123">[email&#160;protected]</span></a>
</p>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-footer our-app">
<h3>Our Mobile App</h3>
<ul class="app-btn">
<li>
<a href="javascript:void(0)">
<i class="lni lni-apple"></i>
<span class="small-title">Download on the</span>
<span class="big-title">App Store</span>
</a>
</li>
<li>
<a href="javascript:void(0)">
<i class="lni lni-play-store"></i>
<span class="small-title">Download on the</span>
<span class="big-title">Google Play</span>
</a>
</li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

 <div class="single-footer f-link">
<h3>Information</h3>
<ul>
<li><a href="javascript:void(0)">About Us</a></li>
<li><a href="javascript:void(0)">Contact Us</a></li>
<li><a href="javascript:void(0)">Downloads</a></li>
<li><a href="javascript:void(0)">Sitemap</a></li>
<li><a href="javascript:void(0)">FAQs Page</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Shop Departments</h3>
<ul>
<li><a href="javascript:void(0)">Computers & Accessories</a></li>
<li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
<li><a href="javascript:void(0)">TV, Video & Audio</a></li>
<li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
<li><a href="javascript:void(0)">Headphones</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container">
<div class="inner-content">
<div class="row align-items-center">
<div class="col-lg-4 col-12">
<div class="payment-gateway">
<span>We Accept:</span>
<img src="assets/images/footer/credit-cards-footer.png" alt="#">
</div>
</div>
<div class="col-lg-4 col-12">
<div class="copyright">
<p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
</div>
</div>
<div class="col-lg-4 col-12">
<ul class="socila">
<li>
<span>Follow Us On:</span>
</li>
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });
    </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 23:36:03 GMT -->
</html>