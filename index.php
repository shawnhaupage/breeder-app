<!DOCTYPE html>
<html>
<head>
	<title>Pet Breeding Schedule</title>
	<!-- Add link to Bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center mb-5">Pet Breeding Schedule</h1>
		<form method="post" action="schedule.php">
			<div class="form-group">
				<label for="breed">Breed:</label>
				<input type="text" name="breed" id="breed" class="form-control">
			</div>
			<div class="form-group">
				<label for="male">Male:</label>
				<input type="text" name="male" id="male" class="form-control">
			</div>
			<div class="form-group">
				<label for="female">Female:</label>
				<input type="text" name="female" id="female" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Date:</label>
				<input type="date" name="date" id="date" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Schedule Breeding</button>
		</form>
	</div>
</body>
</html>
