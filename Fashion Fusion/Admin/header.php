<?php
error_reporting(0);
session_start();
$user=$_SESSION['admin_email'];
$admin = $_SESSION['admin_email'];
if(!isset($admin)){
   header('location:admin_login.php');
}
@include 'include.php';
?>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/p_detail.css">
    <link rel="icon" type="image/png" href="images/favicon/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Admin Panel</title>
</head>
<body>
        <div class="brand">
           <a href='index.php'><img src="img/ff.png"><a>
        </div>
        <ul>
           <a href="index.php"><li  class="active"><i class="bi bi-grid"></i>&nbsp;&nbsp;Dashboard</li></a>
         <li class="nav__item">
            <div class="dropdown">
            <a class="dropbtn"><i class="bi bi-boxes"></i>&nbsp;&nbsp;Products</a>
            <div class="dropdown-content">
            <a href="products.php" class="d"><i class="bi bi-eye"></i>&nbsp;&nbsp;View All Products</a>
            <a href="p_man.php" class="d"><i class="bi bi-pen"></i>&nbsp;&nbsp;Add Men's </a>
            <a href="p_woman.php" class="d"><i class="bi bi-pen"></i>&nbsp;&nbsp;Add Women's</a>
            <a href="p_kids.php" class="d"><i class="bi bi-pen"></i>&nbsp;&nbsp;Add Kid's</a>
            </div>
         </li>
         <li class="nav__item">
            <div class="dropdown">
            <a class="dropbtn"><i class="bi bi-cart-dash"></i>&nbsp;&nbsp;Order's</a>
            <div class="dropdown-content">
            <a href="orders.php" class="d"><i class="bi bi-eye"></i>&nbsp;&nbsp;View All Order's</a>
            <a href="pendingorders.php" class="d"><i class="bi bi-arrow-repeat"></i>&nbsp;&nbsp;Pending</a>
           <a href="approvedorders.php" class="d"><i class="bi bi-check2-circle"></i>&nbsp;&nbsp;Approved</a>
            </div>
         </li>
           <a href="userstable.php"><li><i class="bi bi-people"></i>&nbsp;&nbsp;User's</li></a>
           <a href="adminstable.php"><li><i class="bi bi-person-gear"></i>&nbsp;&nbsp;Admin's</li></a>
           <a href="logout.php"><li><i class="bi bi-door-open"></i>&nbsp;&nbsp;Logout</li></a>
        </ul>
</body>
</html>