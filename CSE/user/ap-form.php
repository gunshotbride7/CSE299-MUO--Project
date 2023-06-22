<?php session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'doctors');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Appointment Form</title>
    <style>
        h1 {
	        text-align: center;
        }
        
        body {
            font-family: Arial, sans-serif;
            align-items: center;
        }
        
        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="consultation"],
        input[type="doctor"],
        select {
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #032231;
            align-items: center;
        }
                
        input[type="submit"]:hover {
            background-color: #032231;
        }

        fieldset {
	        border: 1px solid #032231;
	        padding: 10px;
	        margin-bottom: 20px;
        }

        form {
	        width: 80%;
	        margin: 0 auto;
        }

        button[type="submit"] {
	    display: block;
	    margin: 0 auto;
	    padding: 10px 20px;
	    background-color: #032231;
	    color: #fff;
	    border: none;
	    border-radius: 5px;
        font-size: 16px;
	    cursor: pointer;
        }

        header {
	    background-color: #018ea7;
	    color: #fff;
	    padding: 10px;
	    display: flex;
	    flex-direction: row;
	    align-items: center;
	    justify-content: space-between;
        }

        nav ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    display: flex;
	    flex-direction: row;
        }       

        nav li {
	    margin-right: 20px;
        }

        nav a {
	    color: #fff;
	    text-decoration: none;
        }

    </style>
</head>
<body style = "background-color: #ffffff;">
    <header>
		<img src="../Images/main-logo.png" alt="logo">
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#">Doctors</a></li>
				<li><a href="#">Appointments</a></li>
				<li>
                    <div class = "dropdown">
                       <span><a href="#">Contact</a></span>
                    </div>
                </li>
                <li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
    <h1>Doctor Appointment Form</h1>
    <form action="process.php" method="post">
        <fieldset style="background-color: #93e2f0;">
            <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required><br><br>
        
                <label for="date">Date of Birth:</label>
                <input type="date" id="date" name="date" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required><br><br>
                
                <p>Preffered date and time for appointment</p>
        
                <label for="date">Date:</label>
                <input type="date" id="date" name="p_date" required><br><br>
                
                <label for="time">Time:</label>
                <input type="time" id="time" name="p_time" required><br><br>
                <?php
                $user_check_query = "SELECT username, specialization FROM users";
                $result = mysqli_query($db, $user_check_query);
                ?>

                <label for="consultation">Specialty for consultation:</label>
                <select id="specialization" name="specialization">
                    <option value="" disabled>Select a specialty</option>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['specialization']; ?>"><?php echo $row['specialization']; ?></option>
                        <?php
                    }
                    ?>
                </select><br><br>

                
                <label for="doctor">Doctor:</label>
                <select id="doctor" name="doctor">
                    <option value="" disabled>Select a Doctor</option>
                    <?php
                    $result = mysqli_query($db, $user_check_query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
                        <?php
                    }
                    ?>
                </select><br><br>
                <!-- <select id="doctor" name="doctor">
                    <option value="">Select a doctor</option>
                    <option value="Dr. 1">Dr. 1</option>
                    <option value="Dr. 2">Dr. 2</option>
                    <option value="Dr. 3">Dr. 3</option>
                    <option value="Dr. 4">Dr. 4</option>
                    <option value="Dr. 5">Dr. 5</option>
                </select><br><br> -->
        </fieldset>
        
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>


