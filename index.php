<!DOCTYPE html>
<html>
<head>
  <title>Breeder Buddy - Schedule</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h1>Breeder Buddy - Schedule</h1>
    <?php if (isset($error_message)): ?>
      <div class="alert alert-danger"><?php echo $error_message; ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
        <label for="breed">Breed:</label>
        <input type="text" class="form-control" id="breed" name="breed" value="<?php echo $breed; ?>">
      </div>
      <div class="form-group">
        <label for="animal_type">Animal Type:</label>
        <select class="form-control" id="animal_type" name="animal_type">
          <option value="">--Select--</option>
          <option value="Dog" <?php if ($animal_type === 'Dog') echo 'selected'; ?>>Dog</option>
          <option value="Cat" <?php if ($animal_type === 'Cat') echo 'selected'; ?>>Cat</option>
          <option value="Other" <?php if ($animal_type === 'Other') echo 'selected'; ?>>Other</option>
        </select>
      </div>
     
      <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date; ?>">
      </div>
      <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $end_date; ?>">
      </div>
      <div class="form-group">
        <label for="days_between">Days Between Litters:</label>
        <input type="number" class="form-control" id="days_between" name="days_between" value="<?php echo $days_between; ?>">
      </div>
      <div class="form-group">
        <label for="number_of_litters">Number of Litters:</label>
        <input type="number" class="form-control" id="number_of_litters" name="number_of_litters" value="<?php echo $number_of_litters; ?>">
      </div>
      <div class="form-group">
        <label for="notes">Notes:</label>
        <textarea class="form-control" id="notes" name="notes"><?php echo $notes; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if (isset($litter_dates)): ?>
      <h2>Litter Dates:</h2>
      <ul>
        <?php foreach ($litter_dates as $litter_date): ?>
          <li><?php echo $litter_date; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</body>
</html>


