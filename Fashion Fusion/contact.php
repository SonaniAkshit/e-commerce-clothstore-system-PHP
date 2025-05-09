<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FASHION FASHION CLUB</title>
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
</head>
<style>
   .slogan{
    color:black;
    font-size: 36px;
  }
   .author{
    color:black;
  } 
  .contact-info{
    padding-top:170px;
  }
</style>
<body> 
    <!-- navbar -->
    <nav>
      <div class="logo">
        <img src="images/logo.png" >
      </div>

      <ul class="nav-links">

        <li ><a href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
          </svg></a></li>

        <li><a href="products.php">

        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
          </svg></a></li>

          <?php if(isset($_SESSION['email'])) { ?>
        <li><a href="cart.php">
        <?php
        
            $user=$_SESSION['email'];
            $q1 = "SELECT * FROM cart where email='$user'";
            $result = mysqli_query($con, $q1);
            $num_rows = mysqli_num_rows($result);
          ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
          </svg><?php echo "$num_rows";?></a></li>
          <?php } ?>

        <li><a href="aboutus.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
          </svg></a></li>

        <li><a href="contact.php"  id="active">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg></a></li>


          <?php if(isset($_SESSION['email'])) { ?>
            <li><a href="profile.php"><i class="bi bi-person-circle"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg></a></li>
            <?php } else { ?>
              <li><a href="login.php"><i class="bi bi-person-circle"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
           </svg></a></li>
              <?php } ?>
      </ul>
    </nav>
    


    <!-- navbar 
    <center>
      <div class="contact-info">
        <p class="slogan">"Fashion Fusion."</p>
        <p class="author">Radhi Patel</p>
        <p class="author">Divya Patel</p>
        
        <p class="author">Radhizakhaniya260500@gmail.com</p>
        <p class="author">Divyaharipara260500@gmail.com</p>
      </div>
    </center>
    <br>
    <br>
    <br>-->
 
    
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contact Us</title>
    <!--<link rel="stylesheet" href="styles.css">-->
    <style>

        /* Reset some default styles */


header {
    background-color:#f84258;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

textarea {
    resize: vertical;
}

.button {
    background-color: #f84258;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #555;
}



        </style>

    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <section class="contact-form">
        
            <form method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <!--<button type="submit">Submit</button>-->
				<input type="submit" name="submit" value="submit" class="button">
            </form>
        </section>
    </main>
    <!--<footer>
        <p>&copy; 2024 Clothing Shop. All rights reserved.</p>
    </footer>-->

<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","fashionfusion")or die("not connect..");
   //echo "connect sucessfully..";
  
   if(isset($_POST['submit']))
   {   
   
         $name=$_POST['name'];
         $email=$_POST['email'];
         $messag=$_POST['messsag'];
		 
	  $q1="INSERT INTO `contact`(name,email,message) VALUES('$name','$email','$message')";
         mysqli_select_db($con, "fashionfusion");
         $result = mysqli_query($con, $q1);
         if(!$result){
            ?>
            <script>
                    Swal.fire({
                      title: "Oops!",
                      text: "Something Went Wrong.",
                      icon: "error"
                    });
            </script>
            <?php
          }
          else{
            ?>
            <script>
                    Swal.fire({
                    icon: 'success',
                    title:'Thank You!',
                    text: 'Your Query submited.',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
            <?php
            }
			
   }
   mysqli_close($con);

 ?>





    
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