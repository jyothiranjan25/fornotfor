<?php
require('database/dbconfig.php');
include('security.php');
include('includes/header.php');
include('includes/navbar.php');



?>



<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Edit User Profile
                <!-- <button type="button" class="btn btn-primary" style="margin-left: 24px;" data-toggle="modal" data-target="#addadminprofile">
              Add User Profile 
            </button> -->
            </h6>
        </div>

        <div class="card-body">

            <?php

            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * from register where id = '$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>

                    <form action="code.php" method="post">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">
                        <div class="form-group">
                            <label>First Name </label>
                            <input type="text" name="edit_fname" value="<?php echo $row['fname'] ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="edit_lname" value="<?php echo $row['lname'] ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="edit_gender" value="<?php echo $row['gender'] ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label> Grade </label>
                            <input type="text" name="edit_grade" value="<?php echo $row['grade'] ?>" class="form-control" placeholder="Enter Username">
                        </div>


                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label> Phone</label>
                            <input type="tel" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>Whatsapp Phone</label>
                            <input type="tel" name="edit_wphone" value="<?php echo $row['wphone'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>School/college Name</label>
                            <input type="text" name="edit_sname" value="<?php echo $row['sname'] ?>" class="form-control" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label>School/college branch</label>
                            <input type="text" name="edit_sbname" value="<?php echo $row['sbname'] ?>" class="form-control" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label>School/college Adress</label>
                            <input type="text" name="edit_saname" value="<?php echo $row['saname'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>Principal Name</label>
                            <input type="text" name="edit_spname" value="<?php echo $row['spname'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>Principal number</label>
                            <input type="tel" name="edit_spnumber" value="<?php echo $row['spnumber'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>Principal email</label>
                            <input type="email" name="edit_spemail" value="<?php echo $row['spemail'] ?>" class="form-control" placeholder="phone number">
                        </div>

                        <div class="form-group">
                            <label>coordinator name</label>
                            <input type="text" name="edit_scname" value="<?php echo $row['scname'] ?>" class="form-control" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label>coordinator number</label>
                            <input type="tel" name="edit_scnumber" value="<?php echo $row['scnumber'] ?>" class="form-control" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label>coordinator email</label>
                            <input type="email" name="edit_scemail" value="<?php echo $row['scemail'] ?>" class="form-control" placeholder="phone number">
                        </div>










                        <div class="modal-footer">
                            <a class="btn btn-danger" href="register.php">Cancel</a>
                            <button type="submit" name="updatebtn" class="btn btn-success">Update</button>
                        </div>
        </div>
        </form>


<?php
                }
            }
?>





    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>