<?php
session_start();

// initializing variables
$u_num = "";
$u_email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'healthx');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $u_num = mysqli_real_escape_string($db, $_POST['u_num']);
    $u_pass_1 = mysqli_real_escape_string($db, $_POST['u_pass_1']);
    $u_pass_2 = mysqli_real_escape_string($db, $_POST['u_pass_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($u_num)) {
      array_push($errors, "Phone Number is required");
    }
    if (empty($u_pass_1)) {
      array_push($errors, "Password is required");
    }
    if ($u_pass_1 != $u_pass_2) {
      array_push($errors, "The two passwords do not match");
    }

  // first check the database to make sure
  // a user does not already exist with the same phone number
  $user_check_query = "SELECT * FROM user_info WHERE u_num='$u_num' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['u_num'] === $u_num) {
      array_push($errors, "User with the same phone number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $u_pass = md5($u_pass_1); // encrypt the password before saving in the database

    $query = "INSERT INTO user_info (u_num, u_pass)
  			  VALUES('$u_num','$u_pass')";
    mysqli_query($db, $query);

    $_SESSION['success'] = "You are now registered and logged in";
    header('location: index.php');
    exit(); // Add an exit() statement after redirection to prevent further code execution
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $u_num = mysqli_real_escape_string($db, $_POST['u_num']);
    $u_pass = mysqli_real_escape_string($db, $_POST['u_pass']);
    $u_pass = md5($u_pass);

    $query = "SELECT * FROM user_info WHERE u_num='$u_num' AND u_pass='$u_pass'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['u_num'] = $u_num;
      $_SESSION['success'] = "You are now logged in";
      header('location: ./user/home.php');
      exit(); // Add an exit() statement after redirection to prevent further code execution
    } else {
      array_push($errors, "Wrong phone number/password combination");
    }
}
?>
