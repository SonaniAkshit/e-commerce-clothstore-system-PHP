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
   $q1 = "DELETE FROM `user_detail` WHERE id = $delete_id ";
   $result = mysqli_query($con, $q1);
   if($result){
      header('location:userstable.php');
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
<p class="message">User's Detail</p>
<div class="container">
<section class="display-product-table">

   <table>

      <thead>
         <th>Name</th>
         <th>Email</th>
         <th>Mobile No</th>
         <th>Gender</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         mysqli_select_db($con, "fashionfusion");
         $q1 = "SELECT * FROM `user_detail`";
         $result = mysqli_query($con, $q1);
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contactno']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td>
               <a title="Delete" href="userstable.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="bi bi-trash3"></i></a>
            </td>
         </tr><?php
                  }    
                  }
               ?>
      </tbody>
   </table>

</section>
</div>
</body>
</html>
