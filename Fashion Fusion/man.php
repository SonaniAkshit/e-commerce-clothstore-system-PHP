<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/product.js" defer></script>
    <head>
  <body>
    
  <?php @include 'header.php';?>


        <h1>Men<span class="colored-word">'s Fashion</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="container">
              <div class="products-container">
              <?php
                mysqli_select_db($con, "fashionfusion");
                $q1 = "SELECT * FROM `products_man`";
                $result = mysqli_query($con, $q1);
                if(mysqli_num_rows($result) > 0){
                while($fetch_product = mysqli_fetch_assoc($result)){
                ?>
                  <a href="productdetail.php?edit=<?php echo $fetch_product['id']; ?>">
                  <div class="product">
                  <img src="admin/uploaded_img/<?php echo $fetch_product['p_image']; ?>" alt="">
                    <h3><?php echo $fetch_product['p_name']; ?></h3>
                    <div class="price">Rs.<?php echo $fetch_product['p_price']; ?>/-</div>
                  </div>
                </a>
                  <?php
                   };
                    };
                  ?>
              </div>
            </div>

            <a href='cart.php'><h4 class="msg">Uh-Oh! We are<span class="colored-word"> done</span>🛒</h4></a>
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