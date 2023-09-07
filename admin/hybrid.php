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
$query = "SELECT * FROM `hybrid-registration` WHERE `status` = 1 AND `payment_status` IS NOT NULL AND `markasdelete` IS NULL";

// Check if the form is submitted and an event type is selected
if (isset($_POST['search']) && !empty($_POST['event_type'])) {
  $selectedEventType = $_POST['event_type'];
  $query .= " AND `event_type` = '$selectedEventType'";
}
// Set the selected event type for the dropdown
if ($selectedEventType == 'Junior') {
  $Junior = 'selected';
} elseif ($selectedEventType == 'Senior') {
  $Senior = 'selected';
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
    $('#dataTable').DataTable();
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $(document).on("click", ".edit", function() {
      var input = $(this).parents("tr").find("input[type='text']");
      input.each(function() {
        $(this).removeAttr('disabled');
      });
      $(this).parents("tr").find(".add , .edit").toggle();
    });
    $(document).on('click', '.deletereg', function() {
      //alert($(this).attr('data-id'));
      var regId = $(this).val();
      var ele = $(this);
      //alert(regId);
      //return false;
      ele.prop("disabled", true);
      // add spinner to button for some time
      ele.html('<i class="fa fa-spinner fa-spin"></i> Deleting...');
      //return false;
      $.ajax({
        url: 'excel.php',
        type: 'post',
        data: {
          "regId": regId,
        },
        datatype: 'json',
        success: function(response) {
          console.log(response);
          if (response == "success") {
            ele.parents('tr').hide();
          }
        },
        error: function(error) {
          console.log(error)
        }
      });

    });

  });
</script>

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
          // Handle the response (e.g., initiate the download)
          // You can customize this part based on your needs
          // alert("File is ready for download.");
          // You may want to redirect the user to another page for download or handle the download differently.
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