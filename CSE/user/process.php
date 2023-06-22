<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'doctors');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $dob = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pDate = $_POST['p_date'];
    $pTime = $_POST['p_time'];
    $specialty = $_POST['specialization'];
    $doctor = $_POST['doctor'];

    echo $pDate, '<br>', $pTime;
    $query = "INSERT INTO appointment (name, email, phone, dob, p_date, p_time, specialization, doctor) VALUES ('$name', '$email', '$phone', '$dob', '$pDate', '$pTime','$specialty','$doctor')";
    mysqli_query($db, $query);
    // Create a PDO connection to the database
    // $dsn = "mysql:host=localhost;dbname=doctors";
    // $username = "your_username";
    // $password = "your_password";

    // try {
    //     $conn = new PDO($dsn, $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to insert the data
        // $stmt = $conn->prepare("INSERT INTO appointment (name, email, phone, dob, p_date, p_time) VALUES (?, ?, ?, ?, ?, ?)");
        // $stmt->execute([$name, $email, $phone, $dob, $pDate, $pTime]);

        // Redirect to a success page or do any other necessary processing
        header("Location: home.php");
        exit();
    // } catch (PDOException $e) {
    //     // Handle database connection errors
    //     echo "Connection failed: " . $e->getMessage();
    // }
}
?>
