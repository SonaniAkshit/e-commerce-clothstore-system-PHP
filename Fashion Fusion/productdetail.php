<?php
error_reporting(0);
session_start();
@include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel = "stylesheet" href = "css/productdetail.css">
    <link rel = "stylesheet" href = "css/nav.css">
</head>
<style>
    input[type=number]{
        border:1px solid #000;
        border-radius: 5px;
        width:50px;
        padding: 5px;
    }
</style>
<body>

<?php @include 'header.php';?>
<br><br><br><br><br>
    <div class = "main-wrapper">
        <div class = "container">
            <!--===Woman===-->
        <?php
            if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($con, "SELECT * FROM `products_woman` WHERE id = $edit_id");
                if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){
                
            ?>
            <center>
            <form action="" method="post">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                    <img src="admin/uploaded_img/<?php echo $fetch_edit['p_image']; ?>" alt="">
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $fetch_edit['p_name']; ?></span>
                    <span class = "product-price">Rs.<?php echo $fetch_edit['p_price']; ?>/-</span>
                    <span class = "product-price"><i class="bi bi-star-fill"></i> 
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-half"></i>
                                                </span>
                    <p class = "product-description"><?php echo $fetch_edit['p_description']; ?></p>
                    <div class = "btn-groups">
                    <label>Enter Quantity:</label>
                    <input type="number" value="1" min="1" max="20" name="product_quantity" ><br><br>
                    <input type="hidden" name="product_id" value="<?php echo $fetch_edit['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_edit['p_name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_edit['p_price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_edit['p_image']; ?>">
                    <input type="submit" class = "add-cart-btn" value="add to cart" name="add_to_cart">
                    <a href="woman.php"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>BACK</button></a>
                    </div>
                </div>
            </div>
                </form>
            </center>
            <?php
            };
         };
      };
   ?>
            <!--===Man===-->
            <?php
            if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($con, "SELECT * FROM `products_man` WHERE id = $edit_id");
                if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){
                
            ?>
           <center>
            <form action="" method="post">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                    <img src="admin/uploaded_img/<?php echo $fetch_edit['p_image']; ?>" alt="">
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $fetch_edit['p_name']; ?></span>
                    <span class = "product-price">Rs.<?php echo $fetch_edit['p_price']; ?>/-</span>
                    <span class = "product-price"><i class="bi bi-star-fill"></i> 
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-half"></i>
                                                </span>
                    <p class = "product-description"><?php echo $fetch_edit['p_description']; ?></p>
                    <div class = "btn-groups">
                    <label>Enter Quantity:</label>
                    <input type="number" value="1" name="product_quantity" ><br><br>
                    <input type="hidden" name="product_id" value="<?php echo $fetch_edit['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_edit['p_name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_edit['p_price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_edit['p_image']; ?>">
                    <input type="submit" class = "add-cart-btn" value="add to cart" name="add_to_cart">
                    <a href="man.php"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>BACK</button></a>
                    </div>
                </div>
            </div>
                </form>
            </center>
            <?php
            };
         };
      };
   ?>

   <!--===Kids===-->
            <?php
            if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($con, "SELECT * FROM `products_kids` WHERE id = $edit_id");
                if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){
                
            ?>
            <center>
            <form action="" method="post">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                    <img src="admin/uploaded_img/<?php echo $fetch_edit['p_image']; ?>" alt="">
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $fetch_edit['p_name']; ?></span>
                    <span class = "product-price">Rs.<?php echo $fetch_edit['p_price']; ?>/-</span>
                    <span class = "product-price"><i class="bi bi-star-fill"></i> 
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-fill"></i>
                                                  <i class="bi bi-star-half"></i>
                                                </span>
                    <p class = "product-description"><?php echo $fetch_edit['p_description']; ?></p>
                    <div class = "btn-groups">
                    <label>Enter Quantity:</label>
                    <input type="number" value="1" name="product_quantity" ><br><br>
                    <input type="hidden" name="product_id" value="<?php echo $fetch_edit['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_edit['p_name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_edit['p_price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_edit['p_image']; ?>">
                    <input type="submit" class = "add-cart-btn" value="add to cart" name="add_to_cart">
                        <a href="kids.php"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>BACK</button></a>
                    </div>
                </div>
            </div>
                </form>
            </center>
            <?php
            };
         };
      };
   ?>

        </div>
    </div>

    <script src = "script.js"></script>
</body>
</html>
<?php
error_reporting(0);
session_start();
@include 'include.php';

if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['email'])){

            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_image = $_POST['product_image'];
            $product_quantity = $_POST['product_quantity'];

            $user_email=$_SESSION['email'];
        
            $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE image = '$product_image' AND email='$user_email' ");
        
            if(mysqli_num_rows($select_cart) > 0){
                ?>
                    <script>
                        Swal.fire({
                        icon: 'info',
                        text: 'Product is already In the cart.',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>
                <?php
            }else{
            $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity, email) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$user_email')");
            ?>
                <script>
                        Swal.fire({
                        icon: 'success',
                        title:'Successfully!',
                        text: 'Product Added Successfully.',
                        showConfirmButton: false,
                        timer: 1500
                        })
                </script>
                <?php
            }
        }
        else {
            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    icon: 'info',
                    title:'Login First',
                    }).then(() => {
                    window.location.href = 'login.php';
                    });
                });
            </script>
            <?php
    }
}
?>