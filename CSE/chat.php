
<!DOCTYPE html>
<html>
<head>
    <title>Live Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="chat-container">
        <div id="chat-box">
            <?php
            // Fetch and display previous messages from the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "chat_app";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve previous messages
            $sql = "SELECT sender, message FROM messages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each message
                while($row = $result->fetch_assoc()) {
                    $sender = $row["sender"];
                    $message = $row["message"];
                    $messageClass = ($sender === 'user') ? 'user-message' : 'admin-message';
                    echo '<div class="message ' . $messageClass . '"><strong>' . $sender . ':</strong> ' . $message . '</div>';
                }
            } else {
                echo '<div class="message admin-message">No messages yet.</div>';
            }

            $conn->close();
            ?>
        </div>
        <form id="chat-form" action="send_message.php" method="POST">
            <input type="text" name="message" id="chat-input" placeholder="Type your message..." autocomplete="off">
            <button type="submit" id="send-btn">Send</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
