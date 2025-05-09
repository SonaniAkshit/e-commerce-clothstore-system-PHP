<?php
error_reporting(0);
session_start();
$user=$_SESSION['admin_email'];
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:admin_login.php');
}
@include 'include.php';

$randomNumber = rand(10, 99);
$prefix = "P";
$productId = $prefix . $randomNumber;

?>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/p_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Admin Panel</title>
</head>
<body>

    <div class="side-menu">
        <?php @include 'header.php';?>
    </div>

    <center>
    <div class="container">
    <form class="form" method="post" enctype="multipart/form-data">
    <p class="msg">ADD A NEW  KID'S PRODUCT </p>
            <div class="flex">
                <label>
                    <input readonly required="" value="<?php echo $productId;?>" name="id" type="text" class="input">
                </label>

                <label>
                    <input required="" placeholder="Enter Product Name" name="name" type="text" class="input">
                </label>
            </div>  
                    
            <label>
                <input required="" placeholder="Enter Product Price" name="price" min="0" type="number" class="input">
            </label> 

            <label>
            <p align="left">&nbsp;Select Product Image:</p>
                <input required="" name="upload" accept="image/png, image/jpg, image/jpeg, image/webp" type="file" id="upload" class="input">
            </label>

            <label>
            <p align="left">&nbsp;Enter Product Description:</p>
                <textarea id="feedback" name="description" rows="5" cols="30" class="input"></textarea>
            </label>
            <input type="submit" value="Add The Product" name="submit" class="submit">
    </form>
    </div>
    </center>
</body>
</html>
<?php
      error_reporting(0);
  
      if(isset($_POST['submit']))
      { 
        $con=mysqli_connect("localhost","root","","fashionfusion");
        if(!$con)
        {
        die("Failed to coonect");
        }

            $id=$_POST['id'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $image = $_FILES['upload']['name'];
            $file_local = $_FILES['upload']['tmp_name'];
            $description=$_POST['description'];
            
            $folder="uploaded_img/";
            move_uploaded_file($file_local,$folder.$image);

        mysqli_select_db($con, "fashionfusion");
        $q1 = "SELECT * FROM `products_kids` WHERE p_id = '$id'";
        $result = mysqli_query($con, $q1);
        if(mysqli_num_rows($result)>0)
        {
            ?>
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "info",
                title:"Product is already exist!",
              });
              </script>
            <?php
       }
       else{
         $q1="INSERT INTO `products_kids`(p_id,p_name,p_price,p_image,p_description) VALUES('$id', '$name', '$price','$image','$description')";
         mysqli_select_db($con, "fashionfusion");
         $result = mysqli_query($con, $q1);
         if(!$result){
            ?>
            <script>
                    Swal.fire({
                    icon: 'error',
                    title:'Oops!',
                    text: 'Something Went Wrong!',
                    showConfirmButton: false,
                    timer:4000
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
                    title:'Successfully!',
                    text: 'Product Added Successfully.',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(() => {
                    window.location.href = 'Products.php';
                    });
                });
            </script>
            <?php
            }
        }
        mysqli_close($con);
      }
  ?>