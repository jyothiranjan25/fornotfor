<?php



     require('database/dbconfig.php');

// include('security.php');

// if(isset($_POST['login_btn']))
// {
//     $email_login = $_POST['email']; 
//     $password_login = $_POST['password']; 

//     $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
//     $query_run = mysqli_query($connection, $query);

//    if(mysqli_fetch_array($query_run))
//    {
//         $_SESSION['username'] = $email_login;
//         header('Location: index.php');
//    } 
//    else
//    {
//         $_SESSION['status'] = "Email / Password is Invalid";
//         header('Location: login.php');
//    }
    
// }




if(isset($_POST['updatebtn']))
{
     


     $fname = $_POST['edit_fname'];
$lname = $_POST['edit_lname'];

$gender = $_POST['edit_gender'];
$grade = $_POST['edit_grade'];

$email = $_POST['edit_email'];

$phone = $_POST['edit_phone'];

$wphone = $_POST['edit_wphone'];

$sname = $_POST['edit_sname'];
$sbname = $_POST['edit_sbname'];
$saname = $_POST['edit_saname'];


$spname = $_POST['edit_spname'];
$spnumber = $_POST['edit_spnumber'];
$spemail = $_POST['edit_spemail'];

$scname = $_POST['edit_scname'];
$scnumber = $_POST['edit_scnumber'];
$scemail = $_POST['edit_scemail'];

     // $dob=$_POST['edit_birthday'];


     $query ="UPDATE register SET fname='$fname' , lname='$lname' , gender='$gender' ,  grade='$grade',   email='$email' , phone ='$phone' , wphone ='$wphone' , sname='$sname' , sbname='$sbname', saname ='$saname' ,  spname='$spname' , spnumber='$spnumber' , spemail='$spemail' ,  scname='$scname'  , scnumber='$scnumber'  , scemail='$scemail'   WHERE id='$id' ";

    $query_run = mysqli_query($connection , $query); 

     if($query_run)
     {
          $_SESSION['success']="Your data is updated";
          header('location: register.php');
     }else
     {
          $_SESSION['success']="Your data is  not updated";
          header('location: register.php');
     }

     //echo "<script>console.log('".$category."');</script>";

}








?>