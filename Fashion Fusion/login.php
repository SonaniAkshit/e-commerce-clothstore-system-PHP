<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    
</head>

<?php @include 'header.php';?>

    <div class="login">
      <img src="images/login-images/login.png" height="100%">
      <div class="line"></div>
      <div class="login-form">
        <form method="POST">
        <input type="text" placeholder="Enter a Email" name="email">
        <br><br> 
        <input type="password" placeholder="Password" name="password"><br><br>
        <a align="right" href="forgot.php">Forgot Password?</a>
        <br><br>
        <input type="submit" value="LOGIN" name="login" class="login-button"><br>
          </form>
          <br>
          <hr>
          <h4 class="text">Don't Have An Account?<a href="signup.php">Sign Up</a></h4>
      </div>
    </div>
</body>
</html>
<?php
error_reporting(0);	
		if(isset($_POST['login']))
		{
        $email=$_POST['email'];
        $password=$_POST['password'];

        $con=mysqli_connect("localhost","root","","fashionfusion");
        if(!$con)
        {
        die("Failed to coonect");
        }	
              mysqli_select_db($con, "fashionfusion");
              $q1 = "SELECT * FROM `user_detail` where email='$email' AND password='$password'";
              $result = mysqli_query($con, $q1);
          
              if(mysqli_num_rows($result) > 0){
                $_SESSION['email'] = $email; 
                    ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                            icon: 'success',
                            title:'Thank You',
                            text: 'Signed in successfully!',
                            showConfirmButton: false,
                            timer: 1500
                            }).then(() => {
                            window.location.href = 'index.php';
                            });
                        });
                    </script>
                    <?php
              }
                else
                {
                      ?>
                      <script>
                              Swal.fire({
                              icon: 'error',
                              title:'Oops!',
                              text: 'Invalid Email Or Password!',
                              showConfirmButton: false,
                              timer:8000
                          });
                      </script>
                      <?php
                }
            }
?>