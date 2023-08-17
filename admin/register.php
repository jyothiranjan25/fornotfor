<?php

require('database/dbconfig.php');
include('includes/header.php'); 
include('security.php'); 
include('includes/navbar.php'); 
error_reporting(0);




?>

<?php $page='register';  ?>






<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Participants First Name </label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label> Participants last Name </label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="phone number">
            </div>
            <div class="form-group">
                <label>college</label>
                <input type="text" name="college" class="form-control" placeholder="College name">
            </div>
            <div class="form-group">
                <label>college_id</label>
                <input type="text" name="college_id" class="form-control" placeholder="College id">
            </div>
            <div class="form-group ">
            <select id="ticket_type" name="ticket_type" class="form-select"  style="width: 100%;;">
                <option selected >-- Select Your Event Type --</option>
                <option  value="Solo Dance">Solo Dance (Cultural Event)</option>
                <option  value="Solo singing">Solo singing (Cultural Event)</option>
                <option  value="Beat Boxing">Beat Boxing  (Cultural Event)</option>
                <option  value="Mono-Act">Mono-Act  (Cultural Event)</option>
                <option  value="Photography">Photography (Cultural Event)</option>
                <option value="Instagram">Instagram Reels Contest (Cultural Event)</option>
                
                <option  value="Business Quiz">Business Quiz (Managerial Event)</option>
                <option  value="HR Event">HR Event (Case Study)  (Managerial Event)</option>
                <option  value="Finance Event">Finance Event (Case Study) (Managerial Event)</option>
                <option  value="Marketing Event">Marketing Event (Ad Videos)(Managerial Event)</option>

                <option  value="Elocutio">Elocution (Literary Event)</option>
                <option  value="Turn Coat">Turn Coat (Literary Event)</option>
                <option  value="Recitation">Recitation (Literary Event)</option>
                <option  value="Original Story">Original Story Narration (Literary Event)</option>
            </select>
            </div>
                       
           

            <div class="input-group">
                <label for="birthday">Please Enter your Date of birth:</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>

           
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

      <?php if($row['status']==0)
      {
        ?>
        <td>
        <a href="?action=deactive&id=<?php echo $id; ?>" class="text-danger" title="click to activate" data-toggle="tooltip"><i class='fas'>&#xf0ab; </i> </a>

        </td>

        <?php }else{?>

          <td>
        <a href="?action=active&id=<?php echo $id; ?>" class="text-success" title="click to deactivate" data-toggle="tooltip"><i class='fas'>&#xf0aa; </i> </a>

        </td>

        <?php }?>
      

    </div>
  </div>
</div> 


<div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
  
  <div class="card-header py-3">
    
    <h6 class="m-0 font-weight-bold text-primary">User Profile   <?php echo $_SESSION['success']; ?>


     
    </h6>
  </div>

  <div class="card-body">

 
  <?php 
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
      echo '<h2>' .$_SESSION['success']. '</h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo '<h2 class="bg-info">' .$_SESSION['status']. '</h2>';
      unset($_SESSION['status']);
    }

  ?>


    <div class="table-responsive">
    <?php 
    $query="select * from register";
    $query_run=mysqli_query($connection , $query);

  ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Date </th>

            <th> First Name </th>
            <th> Last Name </th>
            <th> Gender  </th>
            <th> Grade  </th>
            <th> stream  </th>
            <th> interest  </th>
            <th>Email </th>
            <th>Phone</th>
            <th>Whatsapp phone</th>



            <th>School/ College</th>
            <th>Branch</th>
            <th>Adress</th>
            
            <th>Principal Name </th>
            <th>Principal Number </th>
            <th>Principal Email </th>

            <th>Co-ordinator Name </th>.
            <th>Co-ordinator Number </th>
            <th>Co-ordinator Email </th>
            <th>Source/Medium/Campaign </th>




            <th>EDIT </th>
            <!-- <th>DELETE </th> -->
            

          </tr>
        </thead>
        <tbody>
     

        <?php 
          if(mysqli_num_rows($query_run) > 0)
        {
          $i=1;
          while($row = mysqli_fetch_assoc($query_run))
          {

                ?>

                <tr>
                <td> <?php  echo $i."."; ?></td>
                <td> <?php  echo date("jS-M-Y H:i",strtotime($row['date'])); ?> </td>


                <td> <?php  echo $row['fname']; ?></td>
                <td> <?php  echo $row['lname']; ?></td>
                <td> <?php  echo $row['gender']; ?></td>
                <td> <?php  echo $row['grade']; ?></td>
                <td> <?php  echo $row['stream']; ?></td>
                <td> <?php  echo $row['interest']; ?></td>
                <td> <?php  echo $row['email'];?></td>
                <td> <?php  echo $row['phone']; ?></td>
                <td> <?php  echo $row['wphone']; ?></td>
                <td> <?php  echo $row['sname']; ?></td>
                <td> <?php  echo $row['sbname']; ?></td>
                <td> <?php  echo $row['saname']; ?></td>

                <td> <?php  echo $row['spname']; ?></td>
                <td> <?php  echo $row['spnumber']; ?></td>
                <td> <?php  echo $row['spemail']; ?></td>

                <td> <?php  echo $row['scname']; ?></td>
                <td> <?php  echo $row['scnumber']; ?></td>
                <td> <?php  echo $row['scemail']; ?></td>
                <td> <?php  echo $row['source']; ?>/ <?php  echo $row['medium']; ?>/  <?php  echo $row['campaign']; ?></td>

               
                
                

                
                  <td>
                      <form action="register_edit.php" method="post">
                          <input type="hidden" name="edit_id" value=" <?php  echo $row['id']; ?>">
                          <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                      </form>
                  </td>
                 
                  <!-- <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                  </td> -->
                </tr> 
                <?php
                $i++;
         
        }
      }else
      {
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

<script>$(document).ready(function() {
    $('#user_table').DataTable();
} );</script>

<script type="text/javascript">

  $(document).ready(function()
  
  {
    $('[data-toggle="tooltip"]').tooltip();
    $(document).on("click", ".edit" , function()
    {
      var input =$(this).parents("tr").find("input[type='text']");
      input.each(function()
      {
        $(this).removeAttr('disabled');
      });
      $(this).parents("tr").find(".add , .edit") .toggle();
    }
    );
  }
  
  );



  </script>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>