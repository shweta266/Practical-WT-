<?php
// Establish database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "student_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

// Get form data
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];

// Update data in database
$sql = "UPDATE students SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Record updated successfully";
} else {
	echo "Error updating record: " . $conn->error;
}

$conn->close();
?>