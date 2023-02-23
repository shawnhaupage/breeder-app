<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Get the form values
	$breed = isset($_POST['breed']) ? trim($_POST['breed']) : '';
	$male = isset($_POST['male']) ? trim($_POST['male']) : '';
	$female = isset($_POST['female']) ? trim($_POST['female']) : '';
	$date = isset($_POST['date']) ? trim($_POST['date']) : '';

	// Validate the form values
	$errors = [];
	if (empty($breed)) {
		$errors[] = 'Breed is required.';
	}
	if (empty($male)) {
		$errors[] = 'Male is required.';
	}
	if (empty($female)) {
		$errors[] = 'Female is required.';
	}
	if (empty($date)) {
		$errors[] = 'Date is required.';
	} else if (!preg_match('/\d{4}-\d{2}-\d{2}/', $date)) {
		$errors[] = 'Invalid date format. Please use the format YYYY-MM-DD.';
	}

	// If there are no errors, save the schedule
	if (empty($errors)) {
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

		// Insert the schedule into the database
		$sql = "INSERT INTO schedules (breed, male, female, date) VALUES ('$breed', '$male', '$female', '$date')";
		if ($conn->query($sql) === TRUE) {
			$message = 'Schedule saved successfully.';
		} else {
			$message = 'Error: ' . $sql . '<br>' . $conn->error;
		}

		// Close the database connection
		$conn->close();
	}
}
