<?php
include("connection.php");

$prn = $_POST['prn'];

$sql = "DELETE FROM students WHERE PRN = '$prn'";

if ($conn->query($sql) === TRUE) {
    echo "Deleted Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
