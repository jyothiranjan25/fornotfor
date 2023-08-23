<?php

require('database/dbconfig.php');
include('includes/header.php');
include('security.php');
include('includes/navbar.php');
error_reporting(0);

?>

<?php $page = 'register';  ?>

<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">

      <h6 class="m-0 font-weight-bold text-primary">User Profile <?php echo $_SESSION['success']; ?>



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
        <?php
        $query = " SELECT HR.id, HR.state, HR.city, HR.pschool, HR.branch, HR.ofcemail, HR.principalno, HR.principalemail, HR.student1, HR.studentgrade1, HR.studentemail1, HR.studentphone, HR.wphone, HR.student2, HR.studentgrade2, HR.studentemail2, HR.studentphone2, HR.wphone2, TS.transaction_ref_no, TS.amount, TS.orderid, TS.payment_status
        FROM `hybrid-registration` AS HR
        JOIN `transactions` AS TS ON HR.id = TS.hybrid_registration_id
        WHERE HR.`status` = 1 AND HR.`markasdelete` IS NULL
        GROUP BY HR.id, HR.state, HR.city, HR.pschool, HR.branch, HR.ofcemail, HR.principalno, HR.principalemail, HR.student1, HR.studentgrade1, HR.studentemail1, HR.studentphone, HR.wphone, HR.student2, HR.studentgrade2, HR.studentemail2, HR.studentphone2, HR.wphone2, TS.transaction_ref_no, TS.amount, TS.orderid, TS.payment_status";
        $query_run = mysqli_query($connection, $query);

        if (!$query_run) {
          echo "Query Error: " . mysqli_error($connection);
        }

        ?>

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
              <th> Transaction ref No</th>
              <th> Amount </th>
              <th> Order ID </th>
              <th> Payment Status </th>
              <th> Payment Date </th>

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
                  <td> <?php echo $row['transaction_ref_no']; ?></td>
                  <td> <?php echo $row['amount']; ?></td>
                  <td> <?php echo $row['orderid']; ?></td>
                  <td> <?php echo $row['payment_status']; ?></td>
                  <td> <?php echo $row['payment_date']; ?></td>
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
  $(document).ready(function()

    {
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
          url: 'delete-hybird-reg.php',
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>