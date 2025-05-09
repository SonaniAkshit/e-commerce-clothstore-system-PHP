<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FASHION FASHION</title>
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/about.css">
   
</head> 
<body>  
  
<?php @include 'header.php';?>



<div class="container">
  <div class="contentLeft">
    <div class="row">
        <div class="imgWrapper">
        <a href="#">
          <img src="./image/img01.jfif">
          </a>
        
        </div>
        <div class="imgWrapper">
        <a href="#">
          <img src="./image/img1.png">
          </a>
        
        </div>
        <div class="imgWrapper">
        <a href="#">
          <img src="./image/img03.jpg">
          </a>
        
        </div>
       
    </div>
  </div>
  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
.container{
    width: 70%;
    height: 70%;
    max-width: 1170px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    grid-gap: 60px;
    padding: 35px 0;
}
.contentLeft,
.contentRight{
    width: 100%;
}
.contentLeft .row{
    margin-top: 20%;
    margin-left: 20%;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
}
.contentLeft .row .imgWrapper{
  margin-top: 5%;
  margin-right: 5%;
    width: 120%;
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.15);
}
.contentLeft .row .imgWrapper img{
    width: 90%;
    height: 90%;
    object-fit: cover;
    user-select: none;
    transition: 0.3s ease;
}
.contentLeft .row .imgWrapper:hover img{
    transform: scale(1.5);
}
.contentLeft .row .imgWrapper:nth-child(odd){
    transform: translateY(-20px);
}
.contentLeft .row .imgWrapper:nth-child(even){
    transform: translateY(20px);
}
.contentRight .content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
}
.contentRight .content h4{
    font-size: 22px;
    font-weight: 400;
    color: #d35400;
}
.contentRight .content h2{
  margin-top: 10%;
    font-size: 40px;
    color: #1e272e;
}
.contentRight .content p{
    font-size: 16px;
    color: #343434;
    line-height: 28px;
    padding-bottom: 10px;
}
.contentRight .content a{
    display: inline-block;
    text-decoration: none;
    font-size: 16px;
    letter-spacing: 1px;
    padding: 13px 30px;
    color: #fff;
    background: #d35400;
    border-radius: 8px;
    user-select: none;
}
@media(max-width: 768px){
    .container{
        grid-template-columns: 1fr;
    }
    .contentLeft .row{
        grid-template-columns: repeat(2, 1fr);
    }
    .contentLeft .row .imgWrapper{
        height: 150px;
    }
    .contentRight .content h4{
        font-size: 18px;
    }
    .contentRight .content h2{
        font-size: 30px;

    }
}</style>

  <div class="contentRight">
    <div class="content">
      <h4>Welcome To</h4>
      <h2>About Us Title...</h2>
      <p>
      Welcome to Fashion Fusion, where style meets innovation in the world of 
      clothing. Our online boutique is dedicated to bringing you the latest 
      trends with a twist, offering a unique blend of classic elegance and contemporary flair.
At Fashion Fusion, we believe that fashion is more than just clothing; it's
 a form of self-expression, creativity, and empowerment. 
Thank you for choosing Fashion Fusion as your go-to destination for all
 things fashion. We can't wait to help you discover your next favorite look!
      </p>
      <a href="#">Read More...</a>
    </div>
  </div>
</div>

	
    <h1 class="main-head-of-color-gold">Explore Us!</h1>
        <center><hr></center> 
    <br><br>
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