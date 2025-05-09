<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <center>
<div class="container">
    <div class="heading">Admin Sign In</div>
    <form action="" method="POST" class="form">
      <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
      <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
      <span class="forgot-password"><a href="admin_forgotpass.php">Forgot Password?</a></span>
      <input class="login-button" type="submit" value="Sign In" name="login">
    </form>
  </div>
</center>
</body>
</html>
<?php
error_reporting(0);
session_start();		
		if(isset($_POST['login']))
		{
        $admin_email=$_POST['email'];
        $password=$_POST['password'];

        $con=mysqli_connect("localhost","root","","fashionfusion");
        if(!$con)
        {
        die("Failed to coonect");
        }	
              mysqli_select_db($con, "fashionfusion");
              $q1 = "SELECT * FROM `admin_detail` where admin_email='$admin_email' AND password='$password'";
              $result = mysqli_query($con, $q1);
              if(mysqli_num_rows($result) > 0){
                $_SESSION['admin_email'] = $admin_email;
                
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
                              timer:5000
                          });
                      </script>
                      <?php
                }
            }
?>