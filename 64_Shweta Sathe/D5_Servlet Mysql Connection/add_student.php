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
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];

// Insert data into database
$sql = "INSERT INTO students (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
	echo "Record added successfully";
} else {
	echo "Error adding record: " . $conn->error;
}

$conn->close();
?>