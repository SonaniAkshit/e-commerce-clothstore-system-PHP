<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/product.js" defer></script>
    <head>
  <body>
        <?php @include 'header.php';?>
        
        
        <h1>Choose <span class="colored-word">Categories</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>
          <div class="container">
              <div class="products-container">
                  <a href="man.php">
                  <div class="product">
                  <img src="images/categories-img/category (1).png" alt="">
                    <h3>Men's</h3>
                  </div>
                </a>

                <a href="woman.php">
                  <div class="product">
                  <img src="images/categories-img/category (2).png" alt="">
                    <h3>Women's</h3>
                  </div>
                </a>

                <a href="kids.php">
                  <div class="product">
                  <img src="images/categories-img/category (1).jpg" alt="">
                    <h3>Kid's</h3>
                  </div>
                </a>

              </div>
            </div>

            <br><br><br>
        <!-- FOOTER -->
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
            for all products at merlinfashion.com
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
  </body>
</html>