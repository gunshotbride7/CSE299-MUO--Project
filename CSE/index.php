<?php include('server.php')?>
<head>
  <title>
    HealthX
  </title>
  <link rel="stylesheet" href="index-style.css">
  <style>
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
  <!-- Nav Bar Starts here -->
  <div class="banner">
    <div class="navbar">
      <img src="./Images/main-logo.png" alt="logo">
      <ul>
        <li><a href="./HealthX/index.php">Pharmacy</a></li>
        <li><a href="index.php">Sign In</a></li>
        <li><a href="login.php">Log In</a></li>
      </ul>
    </div>
    <!-- Nav Bar Ends Here -->

    <!-- Content and Login starts here -->
    <div class="container">
      <div class="about">
        <h2>About Us</h2>
        <p>
          HealthX is an innovative platform that offers users a comprehensive healthcare experience from the comfort of their homes. 
          With features such as online medicine purchase, virtual doctor consultations, and report submission for diagnosis, 
          HealthX revolutionizes the way individuals access medical services. By seamlessly connecting patients with licensed doctors, 
          it provides convenient and accessible healthcare solutions. Whether it's procuring medications, seeking expert medical advice, 
          or sharing medical reports, HealthX empowers users to prioritize their well-being with efficiency and ease.
        </p>
      </div>
      <div class="signup">
        <h2>It's Easy to Start!</h2>
        <p>Just enter your phone number and password to sign up and start off!</p>
        <form method="post" action="index.php">
          <?php include('errors.php'); ?>
          <input type="text" name="u_num" placeholder="Enter your Phone number" required>
          <input type="password" name="u_pass_1" placeholder="Enter your Password" required>
          <input type="password" name="u_pass_2" placeholder="Confirm your Password" required>
          <button type="submit" name="reg_user">Sign Up</button>
          <p>Sign Up here if you are a Doctor! <a href="./doctor/dsignup.php">Sign up</a></p>
        </form>
      </div>
    </div>
    <!-- Content and Login ends here -->

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
            <li><a href="#"><img src="./Images/facebook-logo.png" alt="facebook-logo"></a></li>
            <li><a href="#"><img src="./Images/insta-logo.png" alt="insta-logo"></a></li>
            <li><a href="#"><img src="./Images/twitter-logo.png" alt="twitter-logo"></a></li>
          </ul>
    </div>
  </div>
  <!-- Footer Ends Here -->
</body>
