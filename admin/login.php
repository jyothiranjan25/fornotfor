<?php

session_start();
require('database/dbconfig.php');
include('includes/header.php');
?>

<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
             
              </div>
                <form class="user" action="login.php" method="POST">

                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>

                <?php 
                if(isset($_POST['login_btn']))
                {

                  $email=$_POST['email'];
                  $password=$_POST['password'];

                  $query= "SELECT * FROM `admin_users` where email='$email' AND password = '$password' ";
                  
                  $query_run= mysqli_query($connection , $query);

                  if(mysqli_num_rows($query_run)==1)
                  {
                    echo "Welcome Admin!";
                    $_SESSION['email'] =$email;

                    header('location: index.php');
                    exit();

                  }else
                  {
                    echo "Oops enter the correct email/password";
                    // header('location:login.php');
                  }
                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>