<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_generic=$_POST['product_generic'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    // accessing image
    $product_image=$_FILES['product_image'] ['name'];

    // acessing imge tmp name
    $temp_image=$_FILES['product_image'] ['tmp_name'];

    //checking empty condition
    if($product_title=='' or $description=='' or $product_keywords=='' or 
    $product_category=='' or $product_generic=='' or $product_price=='' or 
    $product_image==''){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"./product_images/$product_image");

        //insert query
        $insert_products="insert into `products` (product_title, description, product_keywords, 
        category_id, generic_id, product_image, product_price, date, status) values
        ('$product_title','$description','$product_keywords','$product_category',
        '$product_generic', '$product_image','$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);

        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
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
    <link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-title" class="form-label">Product Title</label>
                <input type="text" name="product_title" 
                id="product_title" class="form-control"
                placeholder="Enter product title" autocomplete="off"
                required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name ="description" id="description"
                class="form-control" placeholder="Enter product description"
                autocomplete="off" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name ="product_keywords" id="product_keywords"
                class="form-control" placeholder="Enter product keywords"
                autocomplete="off" required="required">
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                        $select_query="Select * from categories";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- generic -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_generic" id="" class="form-select">
                    <option value="">Select a Generic</option>
                    <?php
                        $select_query="Select * from generic";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $generic_title=$row['generic_title'];
                            $generic_id=$row['generic_id'];
                            echo "<option value='$generic_id'>$generic_title</option>";
                        }

                    ?>
                </select>
            </div>

            <!-- Image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product image</label>
                <input type="file" name ="product_image" id="product_image"
                class="form-control" required="required">
            </div>

             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name ="product_price" id="product_price"
                class="form-control" placeholder="Enter product price"
                autocomplete="off" required="required">
            </div>

             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name ="insert_product"
                class="btn btn-info mb-3 px-3 mt-3" value="Insert Product">
            </div>

        </form>
    </div>
    


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>