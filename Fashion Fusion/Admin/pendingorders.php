<?php
error_reporting(0);
session_start();
$user=$_SESSION['admin_email'];
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:admin_login.php');
}
@include 'include.php';

if(isset($_GET['approved'])){
   $approved_id = $_GET['approved'];
   mysqli_select_db($con, "fashionfusion");
   $q1 = "UPDATE `orders` set status='approved' WHERE order_id = $approved_id ";
   $result = mysqli_query($con, $q1);
   if($result){
      header('location:pendingorders.php');
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
<p class="message">Pending Orders</p>
<div class="container">
<section class="display-product-table">

   <table>

      <thead>
         <th>Items</th>
         <th>Customer</th>
         <th>Mobile No</th>
         <th>Email</th>
         <th>Address</th>
         <th>Total Amount</th>
         <th>Date</th>
         <th>Time</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `orders` where status='pending' ";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><?php echo $row['items']; ?></td>
            <td><?php echo $row['custname']; ?></td>
            <td><?php echo $row['contactno']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address'].' ,'.$row['city'].' ,'.$row['state'].' ,'.$row['country'].' ,'.$row['pincode']; ?></td>
            <td><?php echo $row['payment']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
            <td><?php echo $row['order_time']; ?></td>
            <td>
               <a title='Approved' href="pendingorders.php?approved=<?php echo $row['order_id']; ?>"onclick="return confirm('are your sure you want to Approve this?');"> <ion-icon class='orderbtn' name="checkmark-done-outline"></ion-icon></a>
            </td>
         </tr><?php
                  }    
                  }
               ?>
      </tbody>
   </table>

</section>

</section>
</div>
</body>
</html>
