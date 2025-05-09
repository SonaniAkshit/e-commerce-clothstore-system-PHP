<?php
error_reporting(0);
session_start();
$user=$_SESSION['email'];
if(!isset($user)){
   header('location:login.php');
}
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <title>checkout</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/checkout.css">
   <link rel="stylesheet" href="css/nav.css">

</head>
<body>

<?php @include 'header.php';?>


<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $user=$_SESSION['email'];
         $select_cart = mysqli_query($con, "SELECT * FROM `cart` where email='$user'");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
            
            $cart_items[]=$fetch_cart['name']. '(' .$fetch_cart['quantity'].')   ';
            $total_products = implode($cart_items);
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : Rs.<?= $grand_total; ?>/- </span>
   </div>
   <form method='POST'>
      <div class="flex">
   <?php
        $user=$_SESSION['email'];
        mysqli_select_db($con, "fashionfusion");
        $q1 = "SELECT * FROM `user_detail` where email='$user'";
        $result = mysqli_query($con, $q1);
        if(mysqli_num_rows($result) > 0){
        while($fetch_product = mysqli_fetch_assoc($result)){
        ?>
         <div class="inputBox">
            <span>your name</span>
            <input readonly type="text" value=" <?php echo $fetch_product['name']; ?>" name="name" required>
         </div>

         <div class="inputBox">
            <span>your number</span>
            <input readonly type="text" value=" <?php echo $fetch_product['contactno']; ?>" name="contact" required>
         </div>

         <div class="inputBox">
            <span>your email</span>
            <input readonly type="email"  value=" <?php echo $fetch_product['email']; ?>" name="email" required>
         </div>
         
         <div class="inputBox">
            <span>Gender</span>
            <input readonly type="text" value=" <?php echo $fetch_product['gender']; ?>" name="gender" required>
         </div>
         <?php
          };
         };
        ?>
         <div class="inputBox">
            <span>payment method</span>
            <select readonly name="">
               <option value="cash on delivery" selected>cash on devlivery</option>
            </select>
         </div>

         <div class="inputBox">
            <span>address </span>
            <input type="text" placeholder="e.g. flat no or street name" name="address" required>
         </div>

         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Botad" name="city" required>
         </div>

         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. Gujrat" name="state" required>
         </div>

         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. india" name="country" required>
         </div>

         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      
         <div class="inputBox">
            <span>Your Products</span>
            <input readonly type="text" value="<?php echo $total_products; ?>" name="items" required>
         </div>

         <div class="inputBox">
            <span>Pay Money</span>
            <input readonly type="text" value=" <?php echo'Rs.'. $grand_total .'/-'; ?>" name="payment" >
         </div>

      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>
</section>
</div>
</body>
</html>
<?php
error_reporting(0);

if(isset($_POST['order_btn']))
{ 
      $user=$_SESSION['email'];
      $items=$_POST['items'];
      $custname=$_POST['name'];
      $contactno=$_POST['contact'];
      $email=$_POST['email'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $pincode=$_POST['pin_code'];
      $payment=$_POST['payment'];

      mysqli_select_db($con, "fashionfusion");
      $q1 = "SELECT * FROM orders WHERE email = '$user' AND status='pending'";
      $result = mysqli_query($con, $q1);
      if(empty($items)){

         ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'info',
                    title:'Sorry !',
                    text: 'Your Cart Is Empty , Shopping Now.',
                    }).then(() => {
                    window.location.href = 'Products.php';
                    });
                });
            </script>
            <?php
      }
      elseif(mysqli_num_rows($result)>0)
        {   

            ?>
            <script>
               document.addEventListener('DOMContentLoaded', function() {
                  Swal.fire({
                  icon: 'info',
                  title:'Sorry !',
                  text: 'Your Previous Request is Pending , Please Wait For Approval.',
                  }).then(() => {
                  window.location.href = 'cart.php';
                  });
               });
            </script>
            <?php
       }
      else {
         $q1="INSERT INTO `orders`(items,custname,contactno,email,gender,address,city,state,country,pincode,payment) VALUES('$items','$custname','$contactno','$email','$gender','$address','$city','$state','$country','$pincode','$payment')";
      mysqli_select_db($con, "fashionfusion");
      $result = mysqli_query($con, $q1);

      if($result)
      {
         $q1="DELETE FROM  `cart` where email='$user'";
         mysqli_select_db($con, "fashionfusion");
         $result = mysqli_query($con, $q1);

         ?>
         <script>
             document.addEventListener('DOMContentLoaded', function() {
                 Swal.fire({
                 icon: 'success',
                 title:'Your Order has been Placed Successfully.',
                 text: 'View Bill.',
                 }).then(() => {
                 window.location.href = 'cart.php';
                 });
             });
         </script>
         <?php
      }
      }
      
}
?>