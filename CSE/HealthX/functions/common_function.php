<?php

// including connect file
include('./includes/connect.php');

//getting products
function getproducts(){
    global $con;

    //condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['generic'])){

            $select_query="Select * from `products` order by rand() limit 0,9";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_title' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>";
            }
        }
    }
}

//getting all products
function get_all_products(){
    global $con;

    //condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['generic'])){

            $select_query="Select * from `products` order by rand()";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>";
            }
        }
    }
}

//getting unique categories

function get_unique_categories(){
    global $con;

    //condition to check isset or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
            $select_query="Select * from `products` where category_id=$category_id";
            $result_query=mysqli_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
            }
            
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_title' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>";
            }
        }
    }


//getting unique generics

function get_unique_generic(){
    global $con;

    //condition to check isset or not
    if(isset($_GET['generic'])){
        $generic_id=$_GET['generic'];
            $select_query="Select * from `products` where generic_id=$generic_id";
            $result_query=mysqli_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>This generic is not available for service</h2>";
            }
            
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_title' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>";
            }
        }
    }



//displaying generics in sidenav
function getgeneric(){
    global $con;
    $select_generic="select * from generic";
            $result_generic=mysqli_query($con,$select_generic);
            while($row_data=mysqli_fetch_assoc($result_generic)){
                $generic_title=$row_data['generic_title'];
                $generic_id=$row_data['generic_id'];
                echo "<li class='nav-item'>
                <a href='index.php?generic=$generic_id' class='nav-link text-light'>$generic_title</a>
                </li>";
            }
}

//displaying categories in sidenav
function getcategories(){
    global $con;
    $select_categories="select * from categories";
            $result_categories=mysqli_query($con,$select_categories);
            while($row_data=mysqli_fetch_assoc($result_categories)){
                $category_title=$row_data['category_title'];
                $category_id=$row_data['category_id'];
                echo "<li class='nav-item'>
                <a href='index.php?categories=$category_id' class='nav-link text-light'>$category_title</a>
                </li>";
            }
}

//searching products functions

function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
        $select_query="Select * from `products` where product_keywords like '%$search_data_value%'";
            $result_query=mysqli_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>No results match. No products found on this category!</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_title' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>";
            }
        }
    }

//view details function
function view_details(){
    global $con;

    //condition to check isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['generic'])){
            $product_id=$_GET['product_id'];

            $select_query="Select * from `products` where product_id=$product_id";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $description=$row['description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $generic_id=$row['generic_id'];
                echo "<div class='col-md-4 mb-4'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$description</p>
                            <p class='card-text'>Price: $product_price/-</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_title' class='btn btn-secondary'>View more</a>
                            </div>
                    </div>
                </div>
                
                
                <div class='col-md-8'>
                    <!-- related products -->
                    <div class='row'>
                        <div class='col-md-12'>
                            <h4 class='text-center test-info mb-5'>Related Products</h4>
                        </div>
                        <div class='col-md-6'>
                        <img src='./images/p-2.jpg' class='card-img-top' alt='$product_title'>
                        </div>
                        <div class='col-md-6'>
                        <img src='./images/p-3.jpg' class='card-img-top' alt='$product_title'>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}
}

//get ip address function

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
    }


//cart function

function cart() {
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];

        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add' AND product_id = '$get_product_id'";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already present inside the cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ('$get_product_id','$get_ip_add',0)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('This item is added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
}

//function to get cart item numbers

function cart_item() {
    global $con;
    $get_ip_add = getIPAddress();

    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    } else {
        global $con;
        $get_ip_add = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    }

    echo $count_cart_items;
}

//total price function
function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
    $result=mysqli_query($con,$cart_query);
    $total_price = 0; // Initialize the variable
    
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="Select * from `products` where product_id='$product_id'";
        $result_products=mysqli_query($con,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
        }
    }
    echo $total_price;

}


?>