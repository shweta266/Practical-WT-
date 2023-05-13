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

// Get record ID to delete
$id = $_GET["id"];

// Delete record from database
$sql = "DELETE FROM students WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>