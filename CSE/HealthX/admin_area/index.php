<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

    <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
}

    .footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    box-shadow: 2px 3px 2px 4px rgba(0, 0, 0, 0.2);
    background: rgb(95,88,222);
    background: linear-gradient(90deg, rgba(95,88,222,1) 0%, rgba(2,173,227,1) 52%, rgba(181,237,249,1) 84%);
    padding: 10px;
    left: 0;
    bottom: 0;
    width: 100%;
    position: fixed;
  }
  .footer .right img {
    width: 20%;
    display: inline-block;
  }
  .footer ul {
    list-style-type: none;
  }
  </style>

</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="/CSE/Images/main-logo.png" alt="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

            <!-- second child -->
                <div class="bg-light">
                    <h3 class="text-center p-2">Manage Details</h3>
                </div>
            
            <!-- third child -->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href="#"><img src="../images/" alt=""class="admin-image"></a>
                        <p class="class text-light">Admin Name</p>
                    </div>
                    <div class="button text-center">
                        <!-- button*10>a.nav.link.text-light.bg-info.my-1 -->
                        <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                        <button class="my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Catergories</a></button>
                        <button class="my-3"><a href="index.php?insert_generic" class="nav-link text-light bg-info my-1">Insert Generic</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Generic</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Log out</a></button>
                    </div>
                </div>
            </div>

    </div>

    <!-- fourth child -->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_generic'])){
            include('insert_generic.php');
        }
        ?>

    </div>

<!-- last child -->
<!-- Footer starts here -->



<div class="footer">
    <div class="left">
      <h4>Company</h4>
      <ul>
        <li><a href="#" style="color: white;">About</a></li>
        <li><a href="#" style="color: white;">Services</a></li>
        <li><a href="#" style="color: white;">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="mid">
        <h4>Get Help</h4>
          <ul>
            <li><a href="#" style="color: white;">FAQ</a></li>
            <li><a href="#" style="color: white;">Payment Options</a></li>
          </ul>
    </div>
    <div class="right">
    <h4>Follow Us</h4>
          <ul>
            <li><a href="#"><img src="/CSE/Images/facebook-logo.png" alt="facebook-logo"></a></li>
            <li><a href="#"><img src="/CSE/Images/insta-logo.png" alt="insta-logo"></a></li>
            <li><a href="#"><img src="/CSE/Images/twitter-logo.png" alt="twitter-logo"></a></li>
          </ul>
    </div>
  </div>
  <!-- Footer Ends Here -->


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