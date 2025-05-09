<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body style="background-color: #ffffff ;">
<?php @include 'header.php';?> 

    <div class="login">
    <img src="images/login-images/signup.png" height="100%">
      <div class="line"></div>
      <div class="login-form">
        <form method="POST">
        <input type="text" placeholder="Full Name" name="name">
        <br><br> 
        <input type="text" placeholder="Email" name="email">
        <br><br> 
        <input type="text" placeholder="Contact No" name="contact">
        <br><br> 
        <div class="Gender">
			  <label>Gender</label>
        <input type="radio" value="Male" name="gender" Required>Male
        <input type="radio" value="Female" name="gender">Female
        </div>
        <br>
        <input type="password" placeholder="Password" name="password"><br><br>
        <input type="submit" value="Create Account" name="signup" class="login-button">
      </form>
      <br>
      <hr>
      <h4 class="text">Have An Account?<a href="login.php">Sign In</a></h4>
      </div>
    </div>
</body>
</html>
<?php
      error_reporting(0);
  
      if(isset($_POST['signup']))
      { 
              $name=$_POST['name'];
              $email=$_POST['email'];
              $contact=$_POST['contact'];
              $gender=$_POST['gender'];
              $password=$_POST['password'];

        $con=mysqli_connect("localhost","root","","fashionfusion");
        if(!$con)
        {
        die("Failed to coonect");
        }	
        mysqli_select_db($con, "fashionfusion");
        $q1 = "SELECT * FROM user_detail WHERE email = '$email'";
        $result = mysqli_query($con, $q1);
        if(empty($name) OR empty($email) OR empty($contact) OR empty($password))
	    {
            ?>
            <script>
                alert("All Fields Are Required");
            </script>
            <?php
	    }
        else if(preg_match('/[0-9]+/', $name))
	    {
            ?>
            <script>
              alert("Number Not Allowed In Full Name.");
            </script>
            <?php
	    }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            ?>
            <script>
              alert("Enter Proper Email Address.");
            </script>
            <?php
		}
        else if(!filter_var( $contact,FILTER_SANITIZE_NUMBER_INT))
	    {
            ?>
            <script>
                alert("Enter Proper Contact Number.");
              </script>
            <?php
	    }
        else if(strlen($contact)>10)
        {
            ?>
            <script>
              alert("Contact Number Must Be(0-9)");
            </script>
            <?php
        }
        else if(strlen($password)<8)
	    {
            ?>
            <script>
              alert("Password Must Be At Least 8 Charactes Long.");
              </script>
            <?php
	    }
        elseif(mysqli_num_rows($result)>0)
        {
            
            ?>
            <script>
              Swal.fire({
              icon: 'info',
              title:'Sorry!',
              text: 'Email is Already Taken!',
              });
              </script>
            <?php
       }
       else{
        $q1="INSERT INTO `user_detail`(name,email,contactno,gender,password) VALUES('$name','$email','$contact','$gender','$password')";
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
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'success',
                    title:'Thank You!',
                    text: 'Account Created.',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(() => {
                    window.location.href = 'login.php';
                    });
                });
            </script>
            <?php
            }
        }
        mysqli_close($con);
      }
  ?>