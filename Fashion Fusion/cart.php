<?php
error_reporting(0);
session_start();
$user=$_SESSION['email'];
if(!isset($user)){
   header('location:login.php');
}
@include 'include.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" href="css/cart.css">
   <link rel="stylesheet" href="css/nav.css">

</head>
<body>
<?php @include 'header.php';?>
<br><br><br><br><br>
<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         session_start();
         $user=$_SESSION['email'];
         $select_cart = mysqli_query($con, "SELECT * FROM `cart` where email='$user'" );
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="admin/uploaded_img/<?php echo $fetch_cart['image']; ?>" height="120" width="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rs.<?php echo($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1" max="20"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>Rs.<?php echo $sub_total =($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="bi bi-trash3"></i></a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" style="margin-top: 0;"><i class="bi bi-bag"></i></a></td>
            <td colspan="3">grand total</td>
            <td>Rs.<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="bi bi-trash3"></i></a></td>
         </tr>
      </tbody>
   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">PLACE ORDER</a>
      <br><br><br>
         <?php
         $user=$_SESSION['email'];
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `orders` where email='$user'";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         ?>
            <a href='billrequestmsg.php' class="billbtn">View Bill</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='historyrequest.php' class="billbtn">View Bill History</a>
        <?php
      }
      ?>
   </div>

</section>
</div>
<script src="js/script.js"></script>
</body>
</html>
