<?php
// Connect to the database
$host = 'your-database-host';
$username = 'your-database-username';
$password = 'your-database-password';
$dbname = 'your-database-name';
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}

// Retrieve all schedules from the database
$sql = 'SELECT * FROM schedules';
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pet Breeding Schedule</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center mb-5">All Pet Breeding Schedules</h1>
		<?php if ($result && $result->num_rows > 0): ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Breed</th>
						<th>Male</th>
						<th>Female</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?= $row['breed'] ?></td>
							<td><?= $row['male'] ?></td>
							<td><?= $row['female'] ?></td>
							<td><?= $row['date'] ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>No schedules found.</p>
		<?php endif; ?>
		<p><a href="schedule.php">Add a new schedule</a></p>
	</div>
</body>
</html>
