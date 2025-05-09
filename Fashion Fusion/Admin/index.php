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
    
    <div class="side-menu">
        <?php @include 'header.php';?>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <a href="admin_signup.php" class="btn">Add New</a>
                    <div class="img-case">
                        <a href="admin_profile.php"><ion-icon name="person-circle-outline"></ion-icon></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

        <a href='products.php'>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM products_man";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Men's Products</h3>
                    </div>
                    <div class="icon-case">
                    <ion-icon name="man-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href='products.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM products_woman";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Women's Products</h3>
                    </div>
                    <div class="icon-case">
                    <ion-icon name="woman-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='products.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM products_kids";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Kid's Products</h3>
                    </div>
                    <div class="icon-case">
                    <ion-icon name="accessibility-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='userstable.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM user_detail";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Total Users</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='adminstable.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM admin_detail";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Total Admin</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='orders.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM orders";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Total Orders</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='pendingorders.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM orders where status='pending'";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Pending Orders</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="sync-outline"></ion-icon>
                    </div>
                </div>
                </a>

                <a href='approvedorders.php'>
                <div class="card">
                    <div class="box">
                        <?php
                         $q1 = "SELECT * FROM orders where status='approved'";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Approved Order's</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                    </div>
                </div>
                </a>
                
                <a href='latestorders.php'>
                <div class="card">
                    <div class="box">
                        <?php
                        $currentDate = date("Y-m-d");
                         $q1 = "SELECT * FROM orders WHERE order_date = '$currentDate'";
                         $result = mysqli_query($con, $q1);
                         $num_rows = mysqli_num_rows($result);
                         echo "<h1>$num_rows</h1>";
                        ?>
                        <h3>Todays Orders</h3>
                    </div>
                    <div class="icon-case">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                </div>
                </a>

            </div>
        </div>
    </div>
</body>
</html>