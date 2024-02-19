<?php
require('database/dbconfig.php');
include('security.php');
// Check if the download button is clicked
if (isset($_POST['download'])) {
  // Get the selected event type from the form
  $selectedEventType = $_POST['event_type'];

  // Prepare the query based on the selected event type
  if (!empty($selectedEventType) && ($selectedEventType != 'PaymentNotDone')) {
    $query = "SELECT * FROM `hybrid-registration` AS HR
    JOIN `transactions` AS T ON HR.id=T.hybrid_registration_id
    WHERE HR.status = 1 AND HR.markasdelete IS NULL";
    $query .= " AND HR.event_type = '$selectedEventType' AND HR.payment_status IS NOT NULL";
  } elseif (!empty($selectedEventType) && ($selectedEventType == 'PaymentNotDone')) {
    $query = "SELECT * FROM `hybrid-registration` WHERE `status` = 1 AND `markasdelete` IS NULL";
    $query .= " AND `payment_status` IS NULL";
  } else {
    $query = "SELECT * FROM `hybrid-registration` AS HR
    JOIN `transactions` AS T ON HR.id=T.hybrid_registration_id
    WHERE HR.status = 1 AND HR.markasdelete IS NULL AND HR.payment_status IS NOT NULL";
  }

  $query_run = mysqli_query($connection, $query);

  // print_r($query_run);
  // Define a file name for the CSV file
  $filename = "data.csv";

  // Set the content type and disposition for the download
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="' . $filename . '"');

  // Create a file pointer (output stream)
  $output = fopen('php://output', 'w');

  // Add column headers to the CSV
  $columnHeaders = array(
    'id', 'country', 'city', 'Participating School', 'Branch', 'Official Email ID of the school', 'Principal Contact Number', 'Principal Email Id', 'Name of the Student 1', 'Grade', 'Email Id', 'Phone Number', 'Whatsapp Number', 'Name of the Student 2', 'Grade', 'Email Id', 'Phone Number', 'Whatsapp Number', 'Name of the Teacher / Coordinator', 'Email Id', 'Phone Number', 'WhatsApp Number', 'Team Name', 'Travel', 'Travel Other', 'source', 'medium', 'campaign', 'Event Type', 'status', 'payment_status', 'markasdelete', 'Form Submission Date', 'Receipt No', 'Amount', 'Transaction ID', 'Order ID', 'Payment Date'
    // Add other column headers here
  );


  fputcsv($output, $columnHeaders);

  // Populate data rows in the CSV
  while ($row_data = mysqli_fetch_assoc($query_run)) {
    // Add data row to the CSV
    fputcsv($output, $row_data);
    // Debugging: Print the row data
    // print_r($row_data);
  }

  // Close the file pointer
  fclose($output);

  exit;
}
