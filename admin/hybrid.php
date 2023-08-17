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
        $query = " select * from `hybrid-registration` where status = 1 and markasdelete is null ";
        $query_run = mysqli_query($connection, $query);

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
              <th> Name of the Teacher Coordinator </th>
              <th> Email Id </th>
              <th> Phone Number </th>
              <th> Team Name </th>
              <th> Select Travel </th>
              <th colspan="2"> Action </th>

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
                  <td> <?php echo $row['tname']; ?></td>
                  <td> <?php echo $row['travel']; ?></td>

                  <td>
                    <!-- <form action="hybird_form_edit.php" method="post">
                      <input type="hidden" name="edit_id" value=" <?php echo $row['SlNo']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                    </form> -->
                    <a class="btn btn-success" href="hybird_form_edit.php?edit_id=<?php echo $row['SlNo']; ?>">EDIT</a>
                  </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="button" name="delete_btn"  class="btn btn-danger deletereg" value="<?php echo $row['SlNo']; ?>"> DELETE</button>
                    </form>
                  </td>
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


      $(document).on('click','.deletereg',function(){

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
                if(response == "success") {
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