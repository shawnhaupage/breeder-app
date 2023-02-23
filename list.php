<?php
// Initialize variables
$entries = array();

// Read entries from file
if (file_exists('entries.json')) {
  $entries = json_decode(file_get_contents('entries.json'), true);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Breeder Buddy - List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h1>Breeder Buddy - List</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Breed</th>
          <th>Animal Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Days Between Litters</th>
          <th>Number of Litters</th>
          <th>Notes</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($entries as $entry): ?>
          <tr>
            <td><?php echo $entry['breed']; ?></td>
            <td><?php echo $entry['animal_type']; ?></td>
            <td><?php echo $entry['start_date']; ?></td>
            <td><?php echo $entry['end_date']; ?></td>
            <td><?php echo $entry['days_between']; ?></td>
            <td><?php echo $entry['number_of_litters']; ?></td>
            <td><?php echo $entry['notes']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
