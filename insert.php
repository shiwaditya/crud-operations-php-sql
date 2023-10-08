<?php
include("connection.php");



// Check connection
if (!$conn) {
    // If the connection fails, terminate the script and display an error message
   
    die("Connection failed: " . mysqli_connect_error());
}

// If the connection is successful, you can now perform database operations using $conn

// Retrieve data from the HTML form
$param1 = $_POST['prn'];
$param2 = $_POST['username'];
$param3 = $_POST['password'];

// SQL query to insert data into the "students" table
$sql = "INSERT INTO students (PRN, Username, Password) VALUES ('$param1', '$param2', '$param3')";

if ($conn->query($sql) === TRUE) {
    echo "Inserted Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
