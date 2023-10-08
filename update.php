<?php
include("connection.php");

$prn = $_POST['prn'];
$newUsername = $_POST['newUsername'];
$newPassword = $_POST['newPassword'];

$sql = "UPDATE students SET Username = '$newUsername', Password = '$newPassword' WHERE PRN = '$prn'";

if ($conn->query($sql) === TRUE) {
    echo "Updated Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
