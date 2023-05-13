<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<div class="header">
		<h1>Student Management System</h1>
	</div>
	<div class="container">
		<h2>Add Student Record</h2>
		<form method="post" action="add_student.php">
			<label>Name:</label>
			<input type="text" name="name" required>
			<label>Email:</label>
			<input type="email" name="email" required>
			<label>Phone:</label>
			<input type="text" name="phone" required>
			<label>Address:</label>
			<textarea name="address" required></textarea>
			<button type="submit" name="add">Add Record</button>
		</form>

		<h2>View Student Records</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php include 'view_students.php'; ?>
			</tbody>
		</table>

		<h2>Update Student Record</h2>
		<form method="post" action="update_student.php">
			<label>ID:</label>
			<input type="text" name="id" required>
			<label>Name:</label>
			<input type="text" name="name" required>
			<label>Email:</label>
			<input type="email" name="email" required>
			<label>Phone:</label>
			<input type="text" name="phone" required>
			<label>Address:</label>
			<textarea name="address" required></textarea>
			<button type="submit" name="update">Update Record</button>
		</form>

		<h2>Delete Student Record</h2>
		<form method="post" action="delete_student.php">
			<label>ID:</label>
			<input type="text" name="id" required>
			<button type="submit" name="delete">Delete Record</button>
		</form>
	</div>
</body>
</html>