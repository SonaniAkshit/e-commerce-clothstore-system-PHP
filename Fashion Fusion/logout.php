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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);
session_start();

session_unset();

session_destroy();

?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
        icon: 'success',
        title: 'You Have Been Logged Out.',
        text: 'Thank You!',
        }).then(() => {
        window.location.href = 'index.php';
        });
    });
</script>
<?php
exit;
?>
</body>
</html>

