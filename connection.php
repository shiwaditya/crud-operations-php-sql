<?php
$servername = "localhost"; // Hostname of the MySQL server
$username = "root";        // MySQL username
$password = "";            // MySQL password (leave empty for local development)
$database = "student";     // Name of the database you want to connect to

// Create a connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    // If the connection fails, terminate the script and display an error message
    die("Connection failed: " . mysqli_connect_error());
}

// If the connection is successful, you can now perform database operations using $conn
?>
