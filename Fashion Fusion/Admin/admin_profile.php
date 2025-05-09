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

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Welcome</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap');
        body{
    font-family: "Comfortaa", sans-serif;
    background-image: radial-gradient(circle at 13% 47%, rgba(140, 140, 140,0.03) 0%, rgba(140, 140, 140,0.03) 25%,transparent 25%, transparent 100%),radial-gradient(circle at 28% 63%, rgba(143, 143, 143,0.03) 0%, rgba(143, 143, 143,0.03) 16%,transparent 16%, transparent 100%),radial-gradient(circle at 81% 56%, rgba(65, 65, 65,0.03) 0%, rgba(65, 65, 65,0.03) 12%,transparent 12%, transparent 100%),radial-gradient(circle at 26% 48%, rgba(60, 60, 60,0.03) 0%, rgba(60, 60, 60,0.03) 6%,transparent 6%, transparent 100%),radial-gradient(circle at 97% 17%, rgba(150, 150, 150,0.03) 0%, rgba(150, 150, 150,0.03) 56%,transparent 56%, transparent 100%),radial-gradient(circle at 50% 100%, rgba(25, 25, 25,0.03) 0%, rgba(25, 25, 25,0.03) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 55% 52%, rgba(69, 69, 69,0.03) 0%, rgba(69, 69, 69,0.03) 6%,transparent 6%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
    background-attachment: fixed;
}
    .welcome-container {
    width: 30%;
    margin-top:5%;
    margin-left:33%;
    padding: 20px;
    /* border-top:2px solid #ff8795;
    border-bottom:2px solid #ff8795; */
    border:2px solid #ff8795;
    border-radius:10px;
    text-align: center;
}
a{
    
    text-decoration:none;
    border:2px solid #000;
    color:#000;
    border-radius:10px;
    font-size:20px;
    padding: 10px;
    transition:.5s;
    
}
a:hover{
    border:2px solid #ff8795;
}
i{
    font-size:30px;
}
img{
    width: 20%;
    border: 1px solid #ff8795;
    border-radius:100px;

}
.line{
    border-top: 0.5px solid #ff8795;
}
.text{
    margin-left:15%;
    width:70%;
    border-top:2px solid #ff8795;
    border-bottom:2px solid #ff8795;
}
</style>
</head>
<body>
    
<?php
        $user=$_SESSION['admin_email'];
        mysqli_select_db($con, "fashionfusion");
        $q1 = "SELECT * FROM `admin_detail` where admin_email='$user'";
        $result = mysqli_query($con, $q1);
        if(mysqli_num_rows($result) > 0){
        while($fetch_product = mysqli_fetch_assoc($result)){
        ?>
    <div class="welcome-container">
        <h1 class="text">Admin Profile<h1>
        <img src="img/profile.png"><br><br>
        <div class='line'></div>
        <h2>Mr/Miss : <?php echo $fetch_product['name']; ?></h2>
        <h3>E-mail Id : <?php echo $fetch_product['admin_email']; ?></h3>
        <h3>Gender : <?php echo $fetch_product['gender']; ?></h3>
        <h3>Contact No : <?php echo $fetch_product['contactno']; ?></h3>
        <div class='line'></div>
        <br><br>
        <a href="index.php"><i class="bi bi-house-door"></i></a>
        <a href="logout.php"><i class="bi bi-door-open"></i></a>
        <br><br>
    </div>
    <?php
        };
        };
    ?>
</body>
</html>