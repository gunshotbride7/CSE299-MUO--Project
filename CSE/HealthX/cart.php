<!-- connect file -->
<?php
    include('./includes/connect.php');
    include('./functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!--bootstrap CSS link-->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <style>
        .cart_img{
    width: 80px;
    height: 80px;
    object-fit: contain;
}
    </style>
</head>
<body>
    <!-- navbar-->
    <div class ="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="../Images/main-logo.png" alt="logo">
  <!-- <a class="navbar-brand" href="./CSE/Images/main-logo.png">Logo</a> -->
  <!--img src ="./images/"logo.png" alt="" class="logo"-->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../HealthX/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_all.php">Products</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Sign in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./CSE/login.php">Log in</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><sup><?php cart_item();?></sup></a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- calling cart function -->
<?php
    cart();
?>

<!-- second child -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</span></a>
      </li>
</ul>
</nav> -->

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Pharmacy</h3>
    <p class="text-center">Welcome to our virtual pharmacy</p>
</div>

<!-- fourth child-table -->
<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
                <!-- php code to display dynamic data -->
                <?php
                  global $con;
                  $get_ip_add = getIPAddress();
                  $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
                  $result=mysqli_query($con,$cart_query);
            
                  $result_count=mysqli_num_rows($result);
                  if($result_count>0){

                    echo
                      "<thead>
                      <tr>
                          <th>Product Title</th>
                          <th>Product Image</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                          <th>Remove</th>
                          <th colspan='2'>Operations</th>
                      </tr>
                  </thead>
                  <tbody>";
                  $total_price=0;
                  while ($row = mysqli_fetch_array($result)) {
                    $product_id = $row['product_id'];
                    $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
                    $result_products = mysqli_query($con, $select_products);
                    
                    while($row_product_price=mysqli_fetch_array($result_products)){
                        $product_price=array($row_product_price['product_price']);
                        $price_table=$row_product_price['product_price'];
                        $product_title=$row_product_price['product_title'];
                        $product_image=$row_product_price['product_image'];
                        $product_values=array_sum($product_price);
                        $total_price+=$product_values;
                    
                ?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="./admin_area/product_images/<?php echo $product_image?>" alt="" class="cart_img"></td>
                    <td><input type="text" name="qty" id="" class="form-input w-50"></td>

                    <?php
                            $get_ip_add = getIPAddress();
                            if(isset($_POST['update_cart'])){
                                $quantities=$_POST['qty'];
                                $update_cart="update `cart_details` set quantity='$quantities' where ip_address='$get_ip_add'";
                                $result_products_quantity=mysqli_query($con, $update_cart);
                                $total_price=$total_price*(int)$quantities;
                                // $total_price=$total_price*$quantities;
                            }
                            ?>

                    <td><?php echo $price_table?>/-</td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></td>
                    <td>
                        <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3"
                        name="update_cart">
                        <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border-0 mx-3"
                        name="remove_cart">
                    </td>
                </tr>

                <?php
                }
              }
              }
          if(mysqli_num_rows($result)==0){
            echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
          }

                ?>  
                  </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-5">
            <?php
            global $con;
            $get_ip_add = getIPAddress();
            //$total_price=0;
            $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
            $result=mysqli_query($con,$cart_query);
            
            $result_count=mysqli_num_rows($result);
                if($result_count>0){
                  echo
                  "<h4 class='px-3'>Subtotal: <strong class='text-info'>$total_price/-</strong></h4>
                  <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'
                  name='continue_shopping'>
                  <a href=''><button class='bg-secondary px-3 py-2 border-0 text-light'>Checkout</button></a>";
                }
                else{
                  echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' 
                  name='continue_shopping'>";
                }

                if(isset($_POST['continue_shopping'])){
                  echo "<script>window.open('index.php','_self')</script>";
                }
            ?>
        </div>
    </div>
</div>
</form>

<!-- function to remove items -->
<?php
function remove_cart_item(){
  global $con;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_query="DELETE FROM cart_details WHERE product_id='$remove_id'";
      $run_delete=mysqli_query($con, $delete_query);
      if($run_delete){
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}
echo $remove_item=remove_cart_item();
?>

<!-- last child -->
<?php
include("./includes/footer.php")
?>

<!--bootstrap js link-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
crossorigin="anonymous"></script>
</body>
</html>