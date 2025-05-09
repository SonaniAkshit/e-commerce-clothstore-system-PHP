<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/slideshow.css">
</head> 
<body>  

  <?php @include 'header.php';?>

  
  
  
      <div class="video">
        <video autoplay muted loop plays-inline class="back__video" height="100%" width="100%">
          <source src="images/video.mp4" type="video/mp4">
      </video>
      </div>
      <br>
      <div class="container">
      <div class="sidebar">
        <div
          style="
            background: linear-gradient(229.99deg, #353535 -26%, darkgrey 145%);
          "
        >
          <h1>Men's Fashion</h1>
          <p>New Fashion, New Passion.</p>
        </div>
        <div
          style="
            background: linear-gradient(215.32deg, #AAAAA8 -1%, #4f6996 124%);
          "
        >
          <h1>Kid's Fashion</h1>
          <p>New Fashion, New Passion.</p>
        </div>
        <div
          style="
            background: linear-gradient(221.87deg, #6f5f4d 1%, #7a7057 128%);
          "
        >
          <h1>Women's Fashion</h1>
          <p>New Fashion, New Passion.</p>
        </div>
      </div>
      <div class="main-slide">
        <div
          style="
            background-image: url('images/slide1.jpg');
          "
        ></div>
        <div
          style="
            background-image: url('images/slide2.jpg');
          "
        ></div>
        <div
          style="
            background-image: url('images/slide3.jpg');
          "
        ></div>
      </div>
      <div class="controls">
        <button class="down-button">
        <i class="bi bi-caret-down-fill"></i>
        </button>
        <button class="up-button">
        <i class="bi bi-caret-up-fill"></i>
        </button>
      </div>
    </div>
      <br>
    <div class="footer-container">
      <div class="footer-1">
        <a href="index.php"><h2>FASHION FUSION🦋</h2></a>
        <br>
        <p><b>ONLINE SHOPPING</b></p>
          <h6>
            Man<br><br>
            Woman <br><br>
            Kids <br><br>
            FashionFusion Exclusive<br><br>
          </h6>
      </div>

      <div class="footer-2">
        <p><b>USEFUL LINKS</b></p>
        <h6>
         <a href=""> Contact Us<br><br></a>
         <a href=""> About US<br><br></a>
        </h6>
      </div>

      <div class="footer-3">
        <p><b>100% Original</b> guarantee</p>
          <h6>
            for all products at fashionfashion.com
          </h6>
        <p><b>Return within 30days</b> of</p>
          <h6>
            receiving you order
          </h6>
        <p><b>Get free delivery</b> for every</p>
          <h6>
            order above Rs.999
          </h6>
      </div>
    </div>
  <p class="copy-right">&copy;2024 Fashion Fusion All Rights Reserved.</p>
  <script src="js/slideshow.js"></script>
  </body>
</html>