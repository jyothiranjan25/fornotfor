<?php

require('database/dbconfig.php');
include('includes/header.php');
include('security.php');
include('includes/navbar.php');
error_reporting(0);

$page = 'register';
// Initialize variables to store selected event type
$selectedEventType = '';
$Junior = '';
$Senior = '';
$All = '';

// Define the default query
$query = "SELECT * FROM `hybrid-registration` WHERE `status` = 1 AND `markasdelete` IS NULL";

// Check if the form is submitted and an event type is selected
$selectedEventType = $_POST['event_type'];
if (isset($_POST['search']) && !empty($_POST['event_type']) && ($_POST['event_type'] != 'PaymentNotDone')) {
  $query .= " AND `event_type` = '$selectedEventType'";
} elseif (isset($_POST['search']) && !empty($_POST['event_type']) && ($_POST['event_type'] == 'PaymentNotDone')) {
  $query .= " AND `payment_status` IS NULL";
}
// Set the selected event type for the dropdown
if ($selectedEventType == 'Junior') {
  $Junior = 'selected';
} elseif ($selectedEventType == 'Senior') {
  $Senior = 'selected';
} elseif ($selectedEventType == 'PaymentNotDone') {
  $PaymentNotDone = 'selected';
} else {
  $All = 'selected';
}
// Execute the database query
$query_run = mysqli_query($connection, $query);
?>
<div class="container-fluid">
  <!-- Add a filter form -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <form method="POST">
        <div class="form-group">
          <label for="event_type">Select Event Type:</label>
          <select class="form-control" id="event_type" name="event_type">
            <option value="" <?= $All ?>>All</option>
            <option value="Junior" <?= $Junior ?>>Junior</option>
            <option value="Senior" <?= $Senior ?>>Senior</option>
            <option value="PaymentNotDone" <?= $PaymentNotDone ?>>Payment Incomplete Forms</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <button type="submit" class="btn btn-primary" name="search">Search</button>
        <button type="button" class="btn btn-primary" name="download" id="download">Download</button>
      </form>
    </div>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Registred Users <?php echo $_SESSION['success']; ?>
      </h6>
    </div>
    <div class="card-body">
      <?php
      if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h2>' . $_SESSION['success'] . '</h2>';
        unset($_SESSION['success']);
      }

      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h2 class="bg-info">' . $_SESSION['status'] . '</h2>';
        unset($_SESSION['status']);
      }
      ?>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> ID </th>
              <th> Location </th>
              <th> City </th>
              <th> Name of the Participating School </th>
              <th> Branch </th>
              <th> Official Email ID of the school </th>
              <th> Principal Contact Number </th>
              <th> Principal Email Id </th>
              <th> Name of the Student </th>
              <th> Grade </th>
              <th> Email Id </th>
              <th> Phone Number </th>
              <th> Whatsapp Number </th>
              <th> Name of the Student </th>
              <th> Grade </th>
              <th> Email Id </th>
              <th> Phone Number </th>
              <th> Whatsapp Number </th>
              <th> Name of the Teacher Coordinator </th>
              <th> Email Id </th>
              <th> Phone Number </th>
              <th> Whatsapp Number </th>
              <th> Payment Status </th>
              <th> Select Travel </th>
              <th> Registration Date</th>
              <th> Form Type</th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              $i = 1;
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                  <td> <?php echo $i . "."; ?></td>
                  <td> <?php echo $row['state']; ?></td>
                  <td> <?php echo $row['city']; ?></td>
                  <td> <?php echo $row['pschool']; ?></td>
                  <td> <?php echo $row['branch']; ?></td>
                  <td> <?php echo $row['ofcemail']; ?></td>
                  <td> <?php echo $row['principalno']; ?></td>
                  <td> <?php echo $row['principalemail']; ?></td>
                  <td> <?php echo $row['student1']; ?></td>
                  <td> <?php echo $row['studentgrade1']; ?></td>
                  <td> <?php echo $row['studentemail1']; ?></td>
                  <td> <?php echo $row['studentphone']; ?></td>
                  <td> <?php echo $row['wphone']; ?></td>
                  <td> <?php echo $row['student2']; ?></td>
                  <td> <?php echo $row['studentgrade2']; ?></td>
                  <td> <?php echo $row['studentemail2']; ?></td>
                  <td> <?php echo $row['studentphone2']; ?></td>
                  <td> <?php echo $row['wphone2']; ?></td>
                  <td> <?php echo $row['teacher']; ?></td>
                  <td> <?php echo $row['teacheremail']; ?></td>
                  <td> <?php echo $row['teacherphone']; ?></td>
                  <td> <?php echo $row['twphone']; ?></td>
                  <td> <?php echo $row['payment_status']; ?></td>
                  <td> <?php echo $row['travel']; ?></td>
                  <td> <?php echo $row['createdon']; ?></td>
                  <td> <?php echo $row['event_type']; ?></td>
                  <td> <a class="btn btn-success" href="hybird_form_edit.php?edit_id=<?php echo $row['id']; ?>">EDIT</a></td>
                </tr>
            <?php
                $i++;
              }
            } else {
              echo "NO record Found";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
<script>
  $(document).ready(function() {
    // Handle the download button click
    $("#download").click(function() {
      // Get the selected event type
      var selectedEventType = $("#event_type").val();

      // Perform an AJAX request
      $.ajax({
        type: "POST",
        url: "excel.php",
        data: {
          download: true,
          event_type: selectedEventType
        },
        success: function(response) {
          // console.log(response);

          function downloadCSV(response) {
            // // Create a Blob containing the response data with a specified MIME type
            // const blob = new Blob([response], {
            //   type: 'text/csv'
            // });

            // // Create a temporary URL for the Blob
            // const url = window.URL.createObjectURL(blob);

            // // Create a link element to trigger the download
            // const a = document.createElement('a');
            // a.href = url;
            // a.download = 'data.csv';

            // // Simulate a click on the link to trigger the download
            // a.click();

            // // Clean up by revoking the Blob URL
            // window.URL.revokeObjectURL(url);
          }
          downloadCSV(response);
        },
        error: function(xhr, textStatus, errorThrown) {
          // Handle any errors that occur during the AJAX request
          alert("Error: " + errorThrown);
        }
      });
    });
  });
</script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>