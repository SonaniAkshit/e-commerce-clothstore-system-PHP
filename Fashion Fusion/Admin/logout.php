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
session_start();
// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page
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

