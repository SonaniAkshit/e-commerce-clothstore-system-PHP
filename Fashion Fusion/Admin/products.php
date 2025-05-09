<?php
error_reporting(0);
session_start();
$user=$_SESSION['admin_email'];
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:admin_login.php');
}
@include 'include.php';

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_select_db($con, "fashionfusion");
   $q1 = "DELETE FROM `products_man` WHERE id = $delete_id ";
   $result = mysqli_query($con, $q1);
   if($result){
      header('location:products.php');
   }
}

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_description=$_POST['update_p_description'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   if(empty($update_p_image))
   {
      $update_p_image=$image;
   }
   else {
      mysqli_select_db($con, "fashionfusion");
      $q1="UPDATE `products_man` SET p_name = '$update_p_name', p_price = '$update_p_price', p_image = '$update_p_image',p_description='$update_p_description' WHERE id = '$update_p_id'";
      $result = mysqli_query($con, $q1);
      if($result){
         move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
         header('location:products.php');
      }
   }
}

if(isset($_GET['deletew'])){
   $delete_id = $_GET['deletew'];
   mysqli_select_db($con, "fashionfusion");
   $q1 = "DELETE FROM `products_woman` WHERE id = $delete_id ";
   $result = mysqli_query($con, $q1);
   if($result){
      header('location:products.php');
   }
}

if(isset($_POST['update_productw'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_description=$_POST['update_p_description'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   mysqli_select_db($con, "fashionfusion");
   $q1="UPDATE `products_woman` SET p_name = '$update_p_name', p_price = '$update_p_price', p_image = '$update_p_image',p_description='$update_p_description' WHERE id = '$update_p_id'";
   $result = mysqli_query($con, $q1);
   if($result){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      header('location:products.php');
   }
}


if(isset($_GET['deletek'])){
   $delete_id = $_GET['deletek'];
   mysqli_select_db($con, "fashionfusion");
   $q1 = "DELETE FROM `products_kids` WHERE id = $delete_id ";
   $result = mysqli_query($con, $q1);
   if($result){
      header('location:products.php');
   }
}

if(isset($_POST['update_productk'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_description=$_POST['update_p_description'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   mysqli_select_db($con, "fashionfusion");
   $q1="UPDATE `products_kids` SET p_name = '$update_p_name', p_price = '$update_p_price', p_image = '$update_p_image',p_description='$update_p_description' WHERE id = '$update_p_id'";
   $result = mysqli_query($con, $q1);
   if($result){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      header('location:products.php');
   }
}
?>

<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/p_detail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Admin Panel</title>
</head>
<body>
    
<div class="side-menu">
        <?php @include 'header.php';?>
    </div>

   <div class="container">
<center>
<p class="message">Men's Products</p>
<div class="container">
<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `products_man`";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['p_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['p_name']; ?></td>
            <td><?php echo $row['p_price']; ?>/-</td>
            <td>
               <a title='Delete' href="products.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="bi bi-trash3"></i> </a>&nbsp;&nbsp;&nbsp;
               <a title='Update' href="products.php?edit=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
         </tr><?php
                  }    
                  }
               ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($con, "SELECT * FROM `products_man` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
            $image=$fetch_edit['p_image'];
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['p_image']; ?>" height="150" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['p_name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['p_price']; ?>">
      <input type="text" class="box" required name="update_p_description" value="<?php echo $fetch_edit['p_description']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg, image/webp">
      <input type="submit" value="Update The Prodcut" name="update_product" class="delete-btn">
      <button type="button" onclick="closeForm()" class="delete-btn">Cancel Update</button>
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

<!--===FOR WOMAN===-->
<center>
<p class="message">Women's Products</p>
<div class="container">
<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `products_woman`";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['p_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['p_name']; ?></td>
            <td><?php echo $row['p_price']; ?>/-</td>
            <td>
               <a title='Delete' href="products.php?deletew=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="bi bi-trash3"></i></a>&nbsp;&nbsp;&nbsp;
               <a title='Update' href="products.php?editw=<?php echo $row['id']; ?>" ><i class="bi bi-pencil-square"></i> </a>
            </td>
         </tr><?php
                  }    
                  }
               ?>
      </body>
   </table>

</section>

<section class="edit-form-container1">

   <?php
   
   if(isset($_GET['editw'])){
      $edit_id = $_GET['editw'];
      $edit_query = mysqli_query($con, "SELECT * FROM `products_woman` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['p_image']; ?>" height="150" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['p_name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['p_price']; ?>">
      <input type="text" class="box" required name="update_p_description" value="<?php echo $fetch_edit['p_description']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg, image/webp">
      <input type="submit" value="update the prodcut" name="update_productw" class="delete-btn">
      <button type="button" onclick="closeForm1()" class="delete-btn">Cancel Update</button>
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container1').style.display = 'flex';</script>";
      };
   ?>
</section>
<!--===FOR KIDS===-->
<center>
<p class="message">Kid's Products</p>
<div class="container">
<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `products_kids`";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['p_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['p_name']; ?></td>
            <td><?php echo $row['p_price']; ?>/-</td>
            <td>
               <a title='Delete' href="products.php?deletek=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="bi bi-trash3"></i></a>
               <a title='Update' href="products.php?editk=<?php echo $row['id']; ?>" ><i class="bi bi-pencil-square"></i></a>
            </td>
         </tr><?php
                  }    
                  }
               ?>
      </body>
   </table>

</section>

<section class="edit-form-container2">

   <?php
   
   if(isset($_GET['editk'])){
      $edit_id = $_GET['editk'];
      $edit_query = mysqli_query($con, "SELECT * FROM `products_kids` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['p_image']; ?>" height="150" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['p_name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['p_price']; ?>">
      <input type="text" class="box" required name="update_p_description" value="<?php echo $fetch_edit['p_description']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg, image/webp">
      <input type="submit" value="update the prodcut" name="update_productk" class="delete-btn">
      <button type="button" onclick="closeForm2()" class="delete-btn">Cancel Update</button>
      
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container2').style.display = 'flex';</script>";
      };
   ?>
</section>
</div>
<script>
   // Function to close the form
   function closeForm() {
      document.querySelector('.edit-form-container').style.display = 'none';
   }

   function closeForm1() {
      document.querySelector('.edit-form-container1').style.display = 'none';
   }

   function closeForm2() {
      document.querySelector('.edit-form-container2').style.display = 'none';
   }
</script>
</body>
</html>
