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
    <div class="heading">Admin Sign Up</div>
    <form action="" method="POST" class="form">
        <input class="input" type="text" name="name"  placeholder="Full Name">
        <input class="input" type="email" name="email"  placeholder="E-mail">
        <input class="input" type="text" name="contact"  placeholder="Contact Number">
        <div class="input">
			  <label>Gender</label>
        <input type="radio" value="Male" name="gender" Required>Male
        <input type="radio" value="Female" name="gender">Female
        </div>
        <input class="input" type="password" name="password" placeholder="Password">
        <input class="login-button" type="submit" value="Sign Up" name="signup">
        <span class="forgot-password"><a href="index.php">BACK</a></span>
    </form>
  </div>
</center>
</body>
</html>
<?php
      error_reporting();
  
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
        $q1 = "SELECT * FROM admin_detail WHERE admin_email = '$email'";
        $result = mysqli_query($con, $q1);
        if(empty($name) OR empty($email) OR empty($contact) OR empty($gender) OR empty($password))
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
              showConfirmButton: false,
              timer:5000
              });
              </script>
            <?php
       }
       else{
        $q1="INSERT INTO `admin_detail`(name,admin_email,contactno,gender,password) VALUES('$name','$email','$contact','$gender','$password')";
         mysqli_select_db($con, "fashionfusion");
         $result = mysqli_query($con, $q1);
         if(!$result){
            ?>
            <script>
                    Swal.fire({
                      title: "Oops!",
                      text: "Something Went Wrong.",
                      icon: "error"
                      showConfirmButton: false,
                      timer:5000
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
                    text: 'New Admin Account Created.',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(() => {
                    window.location.href = 'index.php';
                    });
                });
            </script>
            <?php
            }
        }
        mysqli_close($con);
      }
  ?>