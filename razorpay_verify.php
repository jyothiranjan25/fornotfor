<?php

require('admin/database/dbconfig.php');
require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

function NewGuid()
{
	$s = strtoupper(md5(uniqid(rand(), true)));
	$guidText = substr($s, 0, 5);

	return $guidText;
}
// End Generate Guid 
$success = true;
$orders = 1209;
$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
	$api = new Api($keyId, $keySecret);

	try {
		// Please note that the razorpay order ID must
		// come from a trusted source (session here, but
		// could be database or something else)
		$attributes = array(
			'razorpay_order_id' => $_SESSION['razorpay_order_id'],
			'razorpay_payment_id' => $_POST['razorpay_payment_id'],
			'razorpay_signature' => $_POST['razorpay_signature']
		);

		$api->utility->verifyPaymentSignature($attributes);
	} catch (SignatureVerificationError $e) {
		$success = false;
		$error = 'Razorpay Error : ' . $e->getMessage();
	}
}

if ($success === true) {
	// Payment Successful.....
	$inserted_id = $connection->real_escape_string($_POST['inserted_id']);
	$paymentid =  $_POST['razorpay_payment_id'];
	$orderid = $_SESSION['razorpay_order_id'];

	$namez = $connection->real_escape_string($_POST['name']);
	$emailz = $connection->real_escape_string($_POST['email']);
	$amountz = $connection->real_escape_string($_POST['amount']);
	$phonez = $connection->real_escape_string($_POST['phone']);

	$trans = mysqli_query($connection, "INSERT INTO `transactions` (`hybrid_registration_id`,`amount`, `transaction_ref_no`,`orderid`,`payment_status`) VALUES ('$inserted_id','$amountz', '$paymentid', '$orderid','Payment Completed')");

	if ($trans == false) {
		echo "<script>alert('TRANSACTION REG ID -" . $inserted_id . " \\nAmount - " . $amountz . "\\nPaymentID - " . $paymentid . "\\nOrderID - " . $orderid . "')</script>";
	}

	if ($trans == true) {

		// GET registered team details to send mail
		$reg_team = mysqli_query($connection, "SELECT * FROM `hybrid-registration` WHERE id =  '" . $inserted_id . "'");
		$result_reg_team = mysqli_fetch_array($reg_team);
		$ofcemail = $result_reg_team['ofcemail'];
		$principalemail = $result_reg_team['principalemail'];
		$studentemail1 = $result_reg_team['studentemail1'];
		$studentemail2 = $result_reg_team['studentemail2'];
		$teacheremail = $result_reg_team['teacheremail'];
		// GET registered team details to send mail


		//echo "success";
		// $setemail = "info@vijaybhoomi.edu.in";
		// $host = "smtp.office365.com";
		// $username = "info@vijaybhoomi.edu.in";
		// $password = "Zab73739";
		$setemail = "collab@vijaybhoomi.edu.in";
		$host = "smtp.office365.com";
		$username = "collab@vijaybhoomi.edu.in";
		$password = "Bam17608";

		$mail->isSMTP(); // Send using SMTP
		$mail->Host = $host; // Set the SMTP server to send through
		$mail->SMTPAuth = true; // Enable SMTP authentication
		$mail->Username = $username; // SMTP username
		$mail->Password = $password; // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port = 587;

		// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
		// TCP port to connect to, use 587 for `PHPMailer::ENCRYPTION_STARTTLS` above
		// ---------------------------------------------------------

		//Recipients
		// $mail->setFrom($email, $type);
		// $mail->setFrom($email);
		// $mail->addAddress($setemail); // Add a recipient


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
		$mail->isHTML(true); // Set email format to HTML
		$mail->Subject = 'FOR NOT FOR International Hybrid British Parliamentary Debate Competition 2022';
		$message = '
		<table style="border-collapse: collapse; " width="100%">
		    <tbody>
		        <tr>
		        <tr>
		            <td width="50%">
		                <img src="https://vijaybhoomi.edu.in/fornotfor/images/fornotfor1.png" width="170px">
		            </td>
		            <td width="50%" align="right">
		                <img src="https://vijaybhoomi.edu.in/images/logomain.webp" width="210px">
		            </td>
		        </tr>
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
		<span style="color:red;font-weight:bold">Yosha: +91 78924 56300 / Ben: +91 90721 55310 </span> <br>
		';
		$mail->Body = $message;

		//$mail->send();
		if ($mail->send()) {
			$log_msg = date('d-m-Y') . ': ' . 'Mail Sent to ' .  $ofcemail . "\r";
			error_log($log_msg, 3, 'error.log');
		} else {
			$log_msg = date('d-m-Y') . ': ' . 'Payment Failure: ' .  $mail->ErrorInfo . "\r";
			error_log($log_msg, 3, 'error.log');
		}
	}

	// update status in hybrid-registration
	if ($trans == true) {
		$payment_status = 'Payment Completed';
		$hybrid_registration_status = mysqli_query($connection, " UPDATE `hybrid-registration` SET payment_status = '$payment_status'  where id =  '" . $inserted_id . "' ");
		echo "<script>window.location.href='thank_you.php'; </script>";
	} else {
		$payment_status = 'Payment Initialized';
		$hybrid_registration_status = mysqli_query($connection, " UPDATE `hybrid-registration` SET payment_status = '$payment_status'  where id =  '" . $inserted_id . "' ");
		echo "<script>window.location.href='thank_you.php'; </script>";
	}
} else {                                           // Payment Failed.....
	echo "<script>alert('Your payment failed! Please try again...');
    window.location.href='the-hybrid-british-parliamentary-debate-register.php';</script>";
	$log_msg = date('d-m-Y') . ': ' . 'Payment Failure: ' .  $error . "\r";
	error_log($log_msg, 3, 'error.log');
}
