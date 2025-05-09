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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
<?php

$user=$_SESSION['email'];
         $select_cart = mysqli_query($con, "SELECT * FROM `orders` where email='$user'");
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $order_id =$fetch_cart['order_id'];
                $items =$fetch_cart['items'];
            }}

$user=$_SESSION['email'];
   mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `orders` where order_id='$order_id' AND items='$items' AND email='$user' AND status='approved' ";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
            header('location:userbill.php');
         }
         else {
            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'info',
                    title:'Sorry !',
                    text: 'Please wait. Your request is pending.',
                    }).then(() => {
                    window.location.href = 'cart.php';
                    });
                });
            </script>
            <?php
         }
?>
</body>
</html>
