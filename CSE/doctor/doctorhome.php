<?php session_start();
$db = mysqli_connect('localhost', 'root', '', 'doctors'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Profile - HealthX</title>
	<link rel="stylesheet" type="text/css" href="doctor.css">
	<style>
		.footer {
			display: flex;
			justify-content: space-evenly;
			box-shadow: 2px 3px 2px 4px rgba(0, 0, 0, 0.2);
			background: rgb(95, 88, 222);
			background: linear-gradient(90deg, rgba(95, 88, 222, 1) 0%, rgba(2, 173, 227, 1) 52%, rgba(181, 237, 249, 1) 84%);
			padding: 10px;
			left: 0;
			bottom: 0;
			width: 100%;
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
	<header>
		<img src="../Images/main-logo.png" alt="logo">
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Doctors</a></li>
				<li><a href="p-demo.html">Patient Demographics</a></li>
				<li>
					<div class="dropdown">
						<span><a href="./Contactus.html">Contact</a></span>
					</div>
				</li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="doctor-profile">
			<img src="doctor.jpg" alt="Doctor Name">
			<?php
			$username = $_SESSION['username'];
			$email = $_SESSION['email'];
		
			// Check if the connection was successful
			if (!$db) {
				die("Database connection failed: " . mysqli_connect_error());
			}
		
			// Fetch doctor's details from the database based on username and email
			$user_check_query = "SELECT username, specialization, about FROM users WHERE username='$username' AND email='$email'";
			$result = mysqli_query($db, $user_check_query);
		
			// Display doctor's details if available
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
		
				$doctorName = $row["username"];
				$specialty = $row["specialization"];
				$about = $row["about"];
		
				echo "<h2>$doctorName</h2>";
				echo "<h3>$specialty</h3>";
				echo "<p>$about</p>";
			} else {
				echo "No doctors found.";
			}

			// Fetch upcoming appointments for the doctor from the appointment table
			$doctorAppointmentsQuery = "SELECT * FROM appointment WHERE doctor='$doctorName' ORDER BY p_date, p_time";
			$appointmentsResult = mysqli_query($db, $doctorAppointmentsQuery);

			echo '<section class="doctor-appointments">';
			echo '<h2>Upcoming Appointments</h2>';
			echo '<ul>';

			// Display upcoming appointments if available
			if (mysqli_num_rows($appointmentsResult) > 0) {
				while ($appointmentRow = mysqli_fetch_assoc($appointmentsResult)) {
					$formNumber = $appointmentRow['a_id'];
					$appointmentDate = $appointmentRow['p_date'];
					$appointmentTime = $appointmentRow['p_time'];

					echo "<li>";
					echo "<p>Form Number: $formNumber</p>";
					echo "<p>Appointment Date & Time: $appointmentDate, $appointmentTime</p>";
					echo "</li>";
				}
			} else {
				echo "<li>No appointments found</li>";
			}

			echo '</ul>';
			echo '</section>';

			// Close the database connection
			mysqli_close($db);
		?>

		</section>
	</main>
	<!-- Footer starts here -->
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
	<!-- Footer Ends Here -->
</body>
</html>
