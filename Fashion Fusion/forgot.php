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
<body>

<?php @include 'header.php';?>

    <div class="login">
    <img src="images/login-images/forgot.png" height="100%">
      <div class="line"></div>
      <div class="login-form">
        <form method="post">
        <input type="text" name="email" placeholder="Enter a Email" id="username">
        <br><br>
        <input type="password" name="password" placeholder="Enter a New Password" id="password"><br><br>
        <input type="password" name="cpassword" placeholder="Enter a New Password Again" id="password"><br><br>
        <input type="submit" value="CONFORM" name="forgot" class="login-button"><br>
          </form>
          <br>
          <hr>
          <h3><a href="login.php">BACK</a></h3>
      </div>
    </div>
</body>
</html>
<?php
error_reporting(0);
session_start();
		
		if(isset($_POST['forgot']))
		{
        $email=$_POST['email'];
		    $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        $con=mysqli_connect("localhost","root","","fashionfusion");
        if(!$con)
        {
        die("Failed to coonect");
        }	
        mysqli_select_db($con, "fashionfusion");
        $q1="select * from user_detail where email='$email'";
        $r=mysqli_query($con, $q1);
          if( empty($email) OR empty($password))
          {
            
            ?>
            <script>

                      Swal.fire({
                        icon: 'warning',
                        title:'Missing!',
                        text: "Enter Email Or NewPassword.",
                        showConfirmButton: false,
                        timer:8000
                    });
              </script>
            <?php
          }
          elseif(mysqli_num_rows($r)===0)
          {
            ?>
            <script>

                    Swal.fire({
                        icon: 'info',
                        title: "Email Doesn't exist.",
                        showConfirmButton: false,
                        timer:8000
                    });
              </script>
            <?php
          }
          else if(strlen($password)<8)
          {

            ?>
            <script>
                      Swal.fire({
                        icon: 'warning',
                        title: "Invalid !",
                        text: 'Password Must Be At Least 8 Charactes Long!',
                        showConfirmButton: false,
                        timer:8000
                    });
              </script>
            <?php
          }
          elseif ($password!=$cpassword) {
            ?>
            <script>
            Swal.fire({
              icon: 'warning',
              title: "Invalid !",
              text: 'Password Or Conform Password Dos`nt Match',
              showConfirmButton: false,
              timer:8000
          });
        </script>
          <?php
          }	
          else
          {
            mysqli_select_db($con, "fashionfusion");
            $q1="update user_detail set password='$password' where email='$email'";
            $data=mysqli_query($con, $q1);
            if($data)
            {
                ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'success',
                    title:'Successfully updated!',
                    text: 'Password Updated!',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(() => {
                    window.location.href = 'login.php';
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
                        text: "Failed to update password. Please try again later!",
                        showConfirmButton: false,
                        timer:8000
                    });
                </script>
                <?php   
            }
          }
          mysqli_close($con);
		}
?>