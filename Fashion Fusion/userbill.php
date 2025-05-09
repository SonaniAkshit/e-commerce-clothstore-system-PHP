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
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="css/userbill.css">
    </head>
    <body>
    <?php
         $user=$_SESSION['email'];
         $select_cart = mysqli_query($con, "SELECT * FROM `orders` where email='$user'");
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $order_id =$fetch_cart['order_id'];
                $items =$fetch_cart['items'];
                $custname=$fetch_cart['custname'];
                $contactno=$fetch_cart['contactno'];
                $email=$fetch_cart['email'];
                $address=$fetch_cart['address'];
                $city=$fetch_cart['city'];
                $pincode=$fetch_cart['pincode'];
                $state=$fetch_cart['state'];
                $country=$fetch_cart['country'];
                $payment=$fetch_cart['payment'];
                $order_date=$fetch_cart['order_date'];
                $order_time=$fetch_cart['order_time'];
            }}
      ?>
        <div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                    <div class = "invoice-head">
                        <div class = "invoice-head-top">
                            <div class = "invoice-head-top-left text-start">
                                <img src = "images/logo.png" width='120%'>
                            </div>
                            <div class = "invoice-head-top-right text-end">
                                <br><br>
                                <h1>Invoice</h1>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-middle">
                            <div class = "invoice-head-middle-left text-start">
                                <p><span class = "text-bold">Date : </span><?php echo$order_date;?></p>
                                <p><span class = "text-bold">Time : </span><?php echo$order_time;?></p>
                            </div>
                            <div class = "invoice-head-middle-right text-end">
                                <p><spanf class = "text-bold">Invoice No : </span>F101<?php echo$order_id;?></p>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <br><br>
                        <div class = "invoice-head-bottom">
                            <div class = "invoice-head-bottom-left">
                                <ul>
                                    <li class = 'text-bold'>Invoice To :</li>
                                    <li>Customer Name : <?php echo $custname;?></li>
                                    <li>Mobile Number : <?php echo $contactno;?></li>
                                    <li><?php echo $address. ','.$city. ','.$state. ','.$country. ','.$pincode;?></li>
                                </ul>
                            </div>
                            <div class = "invoice-head-bottom-right">
                                <ul class = "text-end">
                                    <li class = 'text-bold'>Pay To :</li>
                                    <li>www.FashionFusion.com</li>
                                    <li>fashionfusion@gmail.com</li>
                                    <li>Botad,Gujrat,India,364710</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class = "overflow-view">
                    <br>
                        <div class = "invoice-body">
                            <table>
                                <thead>
                                    <tr>
                                        <td class = "text-bold">Summary</td>
                                        <td class = "text-bold">Total Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $items;?></td>
                                        <td><?php echo $payment;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class = "invoice-foot text-center">
                    <p><span class = "text-bold text-center"></span>Thank You <h6>****</h6></p>
                        <div class = "invoice-btns">
                            <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                                <span>
                                    <i class="fa-solid fa-print"></i>
                                </span>
                                <span>Print</span>
                            </button>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function printInvoice(){
            window.print();
            }
        </script>
    </body>
</html>