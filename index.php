<!DOCTYPE html>
<html>
<head>
	<title>Pet Breeding Schedule</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Pet Breeding Schedule</h1>
	<form method="post" action="schedule.php">
		<label for="breed">Breed:</label>
		<input type="text" name="breed" id="breed">
		<br>
		<label for="male">Male:</label>
		<input type="text" name="male" id="male">
		<br>
		<label for="female">Female:</label>
		<input type="text" name="female" id="female">
		<br>
		<label for="date">Date:</label>
		<input type="date" name="date" id="date">
		<br>
		<input type="submit" value="Schedule Breeding">
	</form>
</body>
</html>
