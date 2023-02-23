<?php
  // Initialize variables
  $breed = '';
  $animal_type = '';
  $start_date = '';
  $end_date = '';
  $days_between = '';
  $number_of_litters = '';
  $notes = '';

  // Check if form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $breed = $_POST['breed'];
    $animal_type = $_POST['animal_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $days_between = $_POST['days_between'];
    $number_of_litters = $_POST['number_of_litters'];
    $notes = $_POST['notes'];

    // Validate form data
    if (empty($breed) || empty($animal_type) || empty($start_date) || empty($end_date) || empty($days_between) || empty($number_of_litters)) {
      $error_message = 'All fields are required.';
    } elseif (!preg_match('/^[0-9]+$/', $days_between) || !preg_match('/^[0-9]+$/', $number_of_litters)) {
      $error_message = 'Days between litters and number of litters must be a positive integer.';
    } elseif (strtotime($start_date) >= strtotime($end_date)) {
      $error_message = 'End date must be after start date.';
    } else {
      // Calculate litter dates
      $litter_dates = array();
      $current_date = strtotime($start_date);
      for ($i = 0; $i < $number_of_litters; $i++) {
        $litter_date = strtotime('+' . $days_between . ' days', $current_date);
        if ($litter_date > strtotime($end_date)) {
          break;
        }
        $litter_dates[] = date('Y-m-d', $litter_date);
        $current_date = $litter_date;
      }
    }
  }