<!DOCTYPE html>
<html>
<head>
	<title>Pet Breeding Schedule</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$breed = $_POST['breed'];
		$male = $_POST['male'];
		$female = $_POST['female'];
		$date = $_POST['date'];
	?>
	<h1>Pet Breeding Schedule</h1>
	<p>Your breeding has been scheduled:</p>
	<ul>
		<li>Breed: <?php echo $breed; ?></li>
		<li>Male: <?php echo $male; ?></li>
		<li>Female: <?php echo $female; ?></li>
		<li>Date: <?php echo $date; ?></li>
	</ul>
</body>
</html>
