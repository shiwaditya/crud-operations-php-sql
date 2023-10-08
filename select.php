<?php
include("connection.php");


$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "PRN: " . $row["PRN"] . " - Username: " . $row["Username"] . "<br>";
    }
} else {
    echo "No users found.";
}

$conn->close();
?>
