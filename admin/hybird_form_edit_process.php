<?php 

require('database/dbconfig.php');

if(isset($_POST['edithybirdReg']))
{

// echo "<pre>";
// print_r($_POST);
// echo "</pre>"; 
// exit;
$regId = $_POST['regId'];
$state = $_POST['state'];
$city = $_POST['city'];

$pschool = $_POST['pschool'];
$branch = $_POST['branch'];

$ofcemail = $_POST['ofcemail'];
$principalno = $_POST['principalno'];

$principalemail = $_POST['principalemail'];
$student1 = $_POST['student1'];

$studentgrade1 = $_POST['studentgrade1'];
$studentemail1 = $_POST['studentemail'];

$studentphone = $_POST['studentphone'];
$wphone = $_POST['wphone'];

$student2 = $_POST['student2'];
$studentgrade2 = $_POST['studentgrade2'];

$studentemail2 = $_POST['studentemail2'];
$studentphone2 = $_POST['studentphone2'];

$wphone2 = $_POST['wphone2'];
$teacher = $_POST['teacher'];

$teacheremail = $_POST['teacheremail'];
$teacherphone = $_POST['teacherphone'];

$tname = $_POST['tname'];
$travel = $_POST['travel'];

$source = $_POST['source'];
$medium = $_POST['medium'];
$campaign = $_POST['campaign'];
date_default_timezone_set('Asia/Kolkata');
$createdon = date('Y-m-d H:i:s');
if($source == "")
{

$source = 'Direct';
$medium = 'Direct';
$campaign = 'Direct';	
}
// $sql = " INSERT INTO `hybrid-registration` (`state`, city, pschool, branch, ofcemail, ofcemail, principalemail, student1, studentgrade1, studentemail1, studentphone, wphone, student2, studentgrade2, studentemail2, studentphone2, wphone2, teacher, teacheremail, teacherphone, tname, travel,status,createdon) VALUES ('$state', '$city' , '$pschool' , '$branch' , '$ofcemail' , '$principalno' , '$principalemail' , '$student1' , '$studentgrade1', '$studentemail1', '$studentphone', '$wphone', '$student2', '$studentgrade2', '$studentemail2', '$studentphone2', '$wphone2',  '$teacher',  '$teacheremail', '$teacherphone', '$tname', '$travel','1','$createdon')";

$sql = " UPDATE `hybrid-registration` SET state = '$state', city = '$city', pschool = '$pschool', branch = '$branch', ofcemail = '$ofcemail', principalemail = '$principalemail', student1 = '$student1', studentgrade1 = '$studentgrade1', studentemail1 = '$studentemail1', studentphone = '$studentphone', wphone = '$wphone', student2 = '$student2', studentgrade2 = '$studentgrade2', studentemail2 = '$studentemail2', studentemail2 = '$studentemail2', studentphone2 = '$studentphone2', wphone2 = '$wphone2', teacher = '$teacher', teacheremail = '$teacheremail', teacherphone = '$teacherphone', tname = '$tname', travel = '$travel' where SlNo =  '".$regId."' ";
  //echo mysqli_connect_error();
	if($connection->query($sql)){
		//echo "success";
		header('location: hybrid.php');	
		
	}else{
		echo $connection->error;
	}	

}
?>




