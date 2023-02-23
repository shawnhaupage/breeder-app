<!DOCTYPE html>
<html>
<head>
	<title>Pet Breeding Schedule</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center mb-5">Pet Breeding Schedule</h1>
		<?php if (isset($errors) && !empty($errors)): ?>
			<div class="alert alert-danger" role="alert">
				<ul>
					<?php foreach ($errors as $error): ?>
						<li><?= $error ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		<?php if (isset($message) && !empty($message)): ?>
			<div class="alert alert-success" role="alert"><?= $message ?></div>
		<?php endif; ?>
		<form method="post" action="">
			<div class="form-group">
				<label for="breed">Breed:</label>
				<input type="text" name="breed" id="breed" class="form-control" value="<?= htmlentities($breed) ?>">
			</div>
			<div class="form-group">
				<label for="male">Male:</label>
				<input type="text" name="male" id="male" class="form-control" value="<?= htmlentities($male) ?>">
			</div>
			<div class="form-group">
				<label for="female">Female:</label>
				<input type="text" name="female" id="female" class="form-control" value="<?= htmlentities($female) ?>">
			</div>
			<div class="form-group">
				<label for="date">Date:</label>
				<input type="date" name="date" id="date" class="form-control" value="<?= htmlentities($date) ?>">
			</div>
			<button type="submit" class="btn btn-primary">Schedule Breeding</button>
		</form>
		<?php if (isset($message) && !empty($message)): ?>
			<p class="mt-3"><a href="list.php">View all schedules</a></p>
		<?php endif; ?>
	</div>
</body>
</html>
