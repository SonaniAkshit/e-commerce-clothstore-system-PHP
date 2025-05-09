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
    <div class="heading">Admin Forgot Pssword</div>
    <form action="" method="POST" class="form">
      <input required="" class="input" type="email" name="email" id="email" placeholder="Enter Your E-mail">
      <input required="" class="input" type="password" name="password" id="password" placeholder="Enter New Password">
      <input required="" class="input" type="password" name="cpassword" id="password" placeholder="Enter New Password Again">
      <input class="login-button" type="submit" value="CONFORM" name="forgot">
      <span class="forgot-password"><a href="admin_login.php">BACK</a></span>
    </form>
  </div>
</center>
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
        $q1="select * from admin_detail where admin_email='$email'";
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
                        text: 'Password Or Conform Password Dos`nt Match !',
                        showConfirmButton: false,
                        timer:8000
                    });
              </script>
            <?php
          }	
          else
          {
            mysqli_select_db($con, "fashionfusion");
            $q1="update admin_detail set password='$password' where admin_email='$email'";
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
                    window.location.href = 'admin_login.php';
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