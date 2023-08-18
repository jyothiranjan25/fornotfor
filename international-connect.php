<?php

require('admin/database/dbconfig.php');
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;


if (isset($_POST['submitReg'])) {


	// print_r($_POST); 
	// exit;


	$country = $_POST['country'];
	$state = $_POST['state'];

	$city = $_POST['city'];
	$pschool = $_POST['pschool'];

	$branch = $_POST['branch'];
	$ofcemail = $_POST['ofcemail'];

	$principalno = $_POST['principalno'];
	$principalemail = $_POST['principalemail'];

	$student1 = $_POST['student1'];
	$studentgrade1 = $_POST['studentgrade1'];

	$studentemail = $_POST['studentemail'];
	$studentphone = $_POST['studentphone'];

	$wphone = $_POST['wphone'];


	$source = $_POST['source'];
	$medium = $_POST['medium'];
	$campaign = $_POST['campaign'];

	if ($source == "") {

		$source = 'Direct';
		$medium = 'Direct';
		$campaign = 'Direct';
	}
	$sql = "INSERT INTO `international-registration` (country , state, city, pschool, branch, ofcemail, principalno, principalemail, student1, studentgrade1, studentemail, studentphone, wphone ) VALUES ('$country' , '$state' , '$city' , '$pschool' , '$branch' , '$ofcemail' ,  '$principalno' , '$principalemail' , '$student1' , '$studentgrade1' , '$studentemail' , '$studentphone' , '$wphone')";
	//echo mysqli_connect_error();
	if ($connection->query($sql)) {
		//echo "success";
		header('location: thank_you.php');
	} else {
		echo $connection->error;
	}


	// if(isset($_POST['country']) && isset($_POST['state'])  && isset($_POST['city']) && isset($_POST['pschool']) && isset($_POST['branch']) && isset($_POST['ofcemail']) && isset($_POST['principalno']) && isset($_POST['principalemail']) && isset($_POST['student1']) && isset($_POST['studentgrade'])  && isset($_POST['studentemail1'])  && isset($_POST['studentphone']) && isset($_POST['wphone'])  )
	// {
	// 	//echo "mahesh";
	// 	$country=mysqli_real_escape_string($connection,$_POST['country']);
	// 	$state=mysqli_real_escape_string($connection,$_POST['state']);
	// 	$city=mysqli_real_escape_string($connection,$_POST['city']);

	// 	$pschool=mysqli_real_escape_string($connection,$_POST['pschool']);
	// 	$branch=mysqli_real_escape_string($connection,$_POST['branch']);

	//     $ofcemail=mysqli_real_escape_string($connection,$_POST['ofcemail']);
	// 	$principalno=mysqli_real_escape_string($connection,$_POST['principalno']);

	// 	$principalemail=mysqli_real_escape_string($connection,$_POST['principalemail']);
	// 	$student1=mysqli_real_escape_string($connection,$_POST['student1']);

	//     $studentgrade=mysqli_real_escape_string($connection,$_POST['studentgrade']);
	// 	$studentemail1=mysqli_real_escape_string($connection,$_POST['studentemail1']);

	// 	$studentphone=mysqli_real_escape_string($connection,$_POST['studentphone']);
	//     $wphone=mysqli_real_escape_string($connection,$_POST['wphone']);



	// 	$sql = "INSERT INTO international-registration (country , state , city , pschool , branch , ofcemail , principalno , principalemail , student1 , studentgrade , studentemail1 , studentphone ,  wphone , source,medium,campaign  ) VALUES ('$country' , '$state' , '$city' , '$pschool' , '$branch' , '$ofcemail' ,  '$principalno' , '$studentemail' , '$student1' , '$studentgrade' , '$studentemail1' , '$studentphone' , '$wphone'  ,'$source','$medium','$campaign')";

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



	// $mail->Subject = "FOR NOT FOR 2022 Registration Acknowledgment.";

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
