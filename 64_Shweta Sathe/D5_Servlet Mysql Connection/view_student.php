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

// Retrieve data from database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
		echo "<td>" . $row["phone"] . "</td>";
		echo "<td>" . $row["address"] . "</td>";
		echo "<td><a href='update_student_form.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_student.php?id=" . $row["id"] . "' onclick='return confirmDelete()'>Delete</a></td>";
		echo "</tr>";
	}
} else {
	echo "0 results";
}

$conn->close();
?>