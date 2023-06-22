<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>

  <!-- First Navbar! -->
  <div class="navbar1">
    <img src="../Images/main-logo.png" alt="logo">
    <h1>Welcome! to HealthX</h1>
  </div>

  <!-- 2nd Navbar -->
  <div class="navbar2">
    <div class="left-items">
      <a href="../user/home.php">Home</a>
    </div>
    <div class="search-container">
        <form action="#">
            <input type="text" placeholder="Search..." name="search">
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="right-items">
      <a href="../user/ap-form.php">Set Appointment</a>
      <a href="">Pharmacy</a>
      <a href="#">Contacts</a> 
      <a href="../logout.php">Logout</a>
    </div>
  </div>

  <!-- Vertical Navbar -->
  <div class="navbar">
    <ul>
        <li><a href="#">Doctor Specialty</a></li>
        <li><a href="#">Past Consultations</a></li>
        <li><a href="#">Test Report</a></li>
        <li><a href="#">Past History</a></li>
    </ul>
</div>

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
            <li><a href="#"><img src="../Images/facebook-logo.png" alt="facebook-logo"></a></li>
            <li><a href="#"><img src="../Images/insta-logo.png" alt="insta-logo"></a></li>
            <li><a href="#"><img src="../Images/twitter-logo.png" alt="twitter-logo"></a></li>
          </ul>
    </div>
  </div>
</body>
</html>
