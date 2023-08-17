<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require('admin/database/dbconfig.php');
//require 'phpmailer/PHPMailerAutoload.php';
// Load Composer's autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';


$mail = new PHPMailer;


if (isset($_POST['submithybridReg'])) {

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>"; 
	// exit;

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
	if ($source == "") {

		$source = 'Direct';
		$medium = 'Direct';
		$campaign = 'Direct';
	}
	$sql = " INSERT INTO `hybrid-registration` (`state`, city, pschool, branch, ofcemail, principalno, principalemail, student1, studentgrade1, studentemail1, studentphone, wphone, student2, studentgrade2, studentemail2, studentphone2, wphone2, teacher, teacheremail, teacherphone, tname, travel,status,createdon) VALUES ('$state', '$city' , '$pschool' , '$branch' , '$ofcemail' , '$principalno' , '$principalemail' , '$student1' , '$studentgrade1', '$studentemail1', '$studentphone', '$wphone', '$student2', '$studentgrade2', '$studentemail2', '$studentphone2', '$wphone2',  '$teacher',  '$teacheremail', '$teacherphone', '$tname', '$travel','1','$createdon')";
	//echo mysqli_connect_error();
	if ($connection->query($sql)) {
		//echo "success";
		// $setemail = "info@vijaybhoomi.edu.in";   
		// $host = "smtp.office365.com";
		// $username = "info@vijaybhoomi.edu.in";
		// $password = "Zab73739"; 
		$setemail = "collab@vijaybhoomi.edu.in";
		$host = "smtp.office365.com";
		$username = "collab@vijaybhoomi.edu.in";
		$password = "Bam17608";

		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = $host;                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = $username;                     // SMTP username
		$mail->Password   = $password;                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;

		// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
		// TCP port to connect to, use 587 for `PHPMailer::ENCRYPTION_STARTTLS` above
		// ---------------------------------------------------------

		//Recipients
		// $mail->setFrom($email, $type);
		// $mail->setFrom($email);
		// $mail->addAddress($setemail);    // Add a recipient


		// ---------------------------------------------------------

		// ---------------------------------------------------------
		$mail->From = trim($setemail);
		$mail->FromName = trim('Fornotfor');
		$mail->AddAddress($ofcemail); // ofcemail
		$mail->AddAddress($principalemail); // principalemail
		$mail->AddAddress($studentemail1); // studentemail1
		$mail->AddAddress($studentemail2); // studentemail2
		$mail->AddAddress($teacheremail); // teacheremail
		//$mail->AddReplyTo(trim('mahesh.j@briskon.com'));
		// ---------------------------------------------------------

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'FOR NOT FOR International Hybrid British Parliamentary Debate Competition 2022';
		$message = '
<table style="border-collapse: collapse; " width="100%">
							<tbody>
								<tr>
								 <tr>
             

            <td width="50%" >
                             <img src="https://vijaybhoomi.edu.in/fornotfor/images/fornotfor1.png" width="170px">

                 </td>
                  <td width="50%" align="right" >
              
			                 <img src="https://vijaybhoomi.edu.in/images/logomain.webp" width="210px">

                 </td></tr>
								</tr>
							</tbody>
						</table>

<br>

Dear Team, <br><br>
Thank you for registering for the <span style="font-style: italic;font-weight:bold">FOR NOT FOR International Debate Competition 2022</span> from Vijaybhoomi University. <br><br>
We will be sending you all further information about the Competition, as well as your topic 24 hours before your Preliminary Round. If you do not receive an email by 16th September, 6 pm, please email/call us.<br><br>
Visit <a href="https://vijaybhoomi.edu.in/fornotfor/">https://vijaybhoomi.edu.in/fornotfor/</a> to understand the Format, Rules and the Process for the debate which can be found in the <span style="font-weight:bold">FOR NOT FOR Brochure.</span><br><br>
We also request you to join the Official Participants WhatsApp Group via this link: <a href="https://chat.whatsapp.com/GPOKg3vupCc7AylXIYtO6c">https://chat.whatsapp.com/GPOKg3vupCc7AylXIYtO6c</a><br><br>
For further information, please write to us at <a href="mailto:fornotfor@vijaybhoomi.edu.in">fornotfor@vijaybhoomi.edu.in.</a> We wish you the very best.<br><br>
Best Regards, <br>
Team <span style="font-style: italic;">FOR NOT FOR</span> <br>
<span style="font-weight:bold">Email:</span> <a href="mailto:fornotfor@vijaybhoomi.edu.in">fornotfor@vijaybhoomi.edu.in</a> <br>
<span style="font-weight:bold"><u>Student Coordinators for any queries:</u></span><br>
<span style="color:red;font-weight:bold">Yosha: +91 78924 56300 / Ben:  +91 90721 55310 </span> <br>
';
		$mail->Body = $message;

		//$mail->send();
		if ($mail->send()) {
			//echo "success";
			header('location: thank_you.php');
		} else {
			echo "error" . $mail->ErrorInfo;
		}
		
	} else {
		echo $connection->error;
	}
	//exit;

	// if(isset($_POST['state']) && isset($_POST['city']) && isset($_POST['pschool']) && isset($_POST['branch']) && isset($_POST['ofcemail']) && isset($_POST['principalno']) && isset($_POST['principalemail']) && isset($_POST['student1']) && isset($_POST['studentgrade1'])  && isset($_POST['studentemail1'])  && isset($_POST['studentphone']) && isset($_POST['wphone']) && isset($_POST['student2']) && isset($_POST['studentgrade2'])  && isset($_POST['studentemail2'])  && isset($_POST['studentphone2']) && isset($_POST['wphone2']) && isset($_POST['teacher']) && isset($_POST['teacheremail'])  && isset($_POST['teacherphone'])  && isset($_POST['tname']) && isset($_POST['travel'])  )
	// {
	// 	//echo "mahesh";
	// 	$state=mysqli_real_escape_string($connection,$_POST['state']);
	// 	$city=mysqli_real_escape_string($connection,$_POST['city']);

	// 	$pschool=mysqli_real_escape_string($connection,$_POST['pschool']);
	// 	$branch=mysqli_real_escape_string($connection,$_POST['branch']);

	//     $ofcemail=mysqli_real_escape_string($connection,$_POST['ofcemail']);
	// 	$principalno=mysqli_real_escape_string($connection,$_POST['principalno']);

	// 	$principalemail=mysqli_real_escape_string($connection,$_POST['principalemail']);
	// 	$student1=mysqli_real_escape_string($connection,$_POST['student1']);

	//     $studentgrade=mysqli_real_escape_string($connection,$_POST['studentgrade1']);
	// 	$studentemail1=mysqli_real_escape_string($connection,$_POST['studentemail1']);

	// 	$studentphone=mysqli_real_escape_string($connection,$_POST['studentphone']);
	//     $wphone=mysqli_real_escape_string($connection,$_POST['wphone']);

	// 	$student2=mysqli_real_escape_string($connection,$_POST['student2']);
	//     $studentgrade2=mysqli_real_escape_string($connection,$_POST['studentgrade2']);

	// 	$studentemail2=mysqli_real_escape_string($connection,$_POST['studentemail2']);
	// 	$studentphone2=mysqli_real_escape_string($connection,$_POST['studentphone']);

	//     $wphone2=mysqli_real_escape_string($connection,$_POST['wphone2']);
	//     $teacher=mysqli_real_escape_string($connection,$_POST['teacher']);
	//     $teacheremail=mysqli_real_escape_string($connection,$_POST['teacheremail']);
	//     $teacherphone=mysqli_real_escape_string($connection,$_POST['teacherphone']);
	//     $tname=mysqli_real_escape_string($connection,$_POST['tname']);
	//     $travel=mysqli_real_escape_string($connection,$_POST['travel']);



	// 	$sql = "INSERT INTO `hybrid-registration` (state, city, pschool, branch, ofcemail, principalno, principalemail, student1, studentgrade1, studentemail1, studentphone, wphone, student2, studentgrade2, studentemail2, studentphone2, wphone2, teacher, teacheremail, teacherphone, tname, travel ) VALUES ('$state' , '$city' , '$pschool' , '$branch' , '$ofcemail' ,  '$principalno' , '$principalemail' , '$student1' , '$studentgrade1' , '$studentemail1' , '$studentphone' , '$wphone' '$student2' , '$studentgrade2' , '$studentemail2' , '$studentphone2' , '$wphone2',  '$teacher',  '$teacheremail' '$teacherphone', '$tname', '$travel' )";


	// 	if (!mysqli_query($connection,$sql ))
	// 	{
	// 		echo " <script> alert ('You are already registered. Please check your registered email for updates!'); window.location='index.php' </script> "; 
	// 	}
	// 	else{
	// 		echo $connection->error;
	// 		// echo "inserted";

	// $sender_mail="fornotfor@vijaybhoomi.edu.in";
	// $sender_pass="vu@12345";
	// // $sender_mail="fornotfor@vijaybhoomi.edu.in";
	// // $sender_pass="vu@12345"; 

	// //$mail->SMTPDebug = 3;   
	// // Enable verbose debug output

	// $mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
	// $mail->SMTPAuth = true;                               // Enable SMTP authentication
	// $mail->Username = $sender_mail;                 // SMTP username
	// $mail->Password = $sender_pass;                           // SMTP password
	// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	// $mail->Port = 587;                                    // TCP port to connect to

	// $mail->setFrom($sender_mail, 'Vijaybhoomi University');
	// // Name is optional
	// $mail->addReplyTo($sender_mail, 'Vijaybhoomi University');

	// $mail->addAddress($email, $name); //to
	// $mail->isHTML(true);


	// $message = '
	// <table style="border-collapse: collapse; " width="100%">
	// 							<tbody>
	// 								<tr>
	// 								 <tr>


	//             <td width="50%" >
	//                              <img src="https://vijaybhoomi.edu.in/fornotfor/images/fornotfor1.png" width="170px">

	//                  </td>
	//                   <td width="50%" align="right" >

	// 			                 <img src="https://vijaybhoomi.edu.in/images/logomain.webp" width="210px">

	//                  </td></tr>
	// 								</tr>
	// 							</tbody>
	// 						</table>

	// <br>

	// Dear '.$fname.', <br><br>
	// Thank you for registering for the FOR NOT FOR Online International Debate from Vijaybhoomi University. <br><br>
	// We will be sending you information about the Opening Ceremony as well as your topic will be shared with you two days before your Preliminary Round. If you do not receive an email by 29th September, 6 pm, please email/ call us.<br><br>
	// Visit <a href="http://vijaybhoomi.edu.in/fornotfor/">http://vijaybhoomi.edu.in/fornotfor/</a> to understand the format, rules and the process for the debate which is mentioned in the <b> FOR NOT FOR Brochure. </b> <br><br>
	// 	We also request you to join the Official Participants WhatsApp Group via this link: <a href="https://chat.whatsapp.com/GjZjtqMgIKLFOALUITik6R">https://chat.whatsapp.com/GjZjtqMgIKLFOALUITik6R .</a> <br><br>
	// For further information, please write to us at fornotfor@vijaybhoomi.edu.in.  We wish you the very best.<br><br><br>
	// Best Regards, <br>
	// Team FOR NOT FOR <br>
	// Email: <a href="mailto:fornotfor@vijaybhoomi.edu.in">fornotfor@vijaybhoomi.edu.in</a> <br>
	// <u>Student Coordinators for any queries </u><br>
	// <span style="color:red;font-weight:bold">Hariharan: +91 95662 39690 / Ben:  +91 90721 55310 </span> <br>
	// ';



	// $mail->Subject = "FOR NOT FOR 2021 Registration Acknowledgment.";

	// $mail->Body = $message;
	// $mail->AltBody = '
	// Dear Participant,
	// Thank you for registering for the FOR NOT FOR Online International Debate from Vijaybhoomi University.
	// We will be sending you information about the Opening Ceremony as well as your topic will be shared with you two days before your Preliminary Round. If you do not receive an email by 29th September, 6 pm, please email/ call us.
	// Visit http://vijaybhoomi.edu.in/fornotfor/ to understand the format, rules and the process for the debate which is mentioned in the FOR NOT FOR Brochure.
	// For further information, please write to us at fornotfor@vijaybhoomi.edu.in.  We wish you the very best.
	// Best Regards, 
	//  Team FOR NOT FOR
	// Email fornotfor@vijaybhoomi.edu.in 
	// Student Coordinators for any queries
	// Hariharan: <a href="+91-9566239690">+91 95662 39690</a> / Ben: <a href="tel:+91-9072155310"> +91 90721 55310</a>';


	// if (!$mail->send()) {
	//     echo "<script>alert('" . $mail->ErrorInfo . "');</script>";
	// } else {
	// 		echo " <script> alert ('Your registration is succesful. Please check your registered email for updates!'); window.location='index.php' </script> "; 
	// 	header('location: thank_you.php');

	// 	}



	// }

	// }
}
