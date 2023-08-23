<?php
require('admin/database/dbconfig.php');
require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;

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

//Early Bird End Date formate yyyy-mm-dd
$EarlyBirdEndDate = "2023-08-31";
if (time() > strtotime($EarlyBirdEndDate)) {
	$amountR = 2000;
} else {
	// default amount
	$amountR = 1000;
}
$gstPercentage = 18;
// Calculate GST amount
$gstAmount = ($amountR * $gstPercentage) / 100;
// Calculate total amount including GST
$amountz = $amountR + $gstAmount;


if (isset($_POST['submithybridReg'])) {

	try {
		$api = new Api($keyId, $keySecret);

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
		$twphone = $_POST['twphone'];

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

		$sql = "INSERT INTO `hybrid-registration` (`state`, city, pschool, branch, ofcemail, principalno, principalemail, student1, studentgrade1, studentemail1, studentphone, wphone, student2, studentgrade2, studentemail2, studentphone2, wphone2, teacher, teacheremail, teacherphone, twphone, tname, travel, status, createdon) VALUES ('$state', '$city', '$pschool', '$branch', '$ofcemail', '$principalno', '$principalemail', '$student1', '$studentgrade1', '$studentemail1', '$studentphone', '$wphone', '$student2', '$studentgrade2', '$studentemail2', '$studentphone2', '$wphone2', '$teacher', '$teacheremail', '$teacherphone', '$twphone', '$tname', '$travel', '1', '$createdon')";
		$status = mysqli_query($connection, $sql);

		if (!$status) {
			// echo "Error description: " . mysqli_error($connection);
			error_log(mysqli_error($connection), 3, 'error.log');
		}

		// payment gateway
		if ($status == true) {
			// Get the auto-generated ID of the inserted row
			$inserted_id = mysqli_insert_id($connection);

			$orderData = [
				'receipt'         => $inserted_id,
				'amount'          => $amountz * 100, // 2000 rupees in paise
				'currency'        => 'INR',
				'payment_capture' => 1 // auto capture
			];

			$razorpayOrder = $api->order->create($orderData);

			$razorpayOrderId = $razorpayOrder['id'];

			$_SESSION['razorpay_order_id'] = $razorpayOrderId;

			$displayAmount = $amount = $orderData['amount'];

			// if ($displayCurrency !== 'INR') {
			// 	$url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
			// 	$exchange = json_decode(file_get_contents($url), true);

			// 	$displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
			// }

			$checkout = 'manual';

			// if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
			// {
			//     $checkout = $_GET['checkout'];
			// }

			$data = [
				"key"               => $keyId,
				"amount"            => $amount,
				"name"              => "fornotfor2023",
				"description"       => "FOR-NOT-FOR",
				"image"             => "https://ifim.edu.in/kanyathon/wp-content/uploads/2020/10/cropped-logo-1.png",
				"prefill"           => [
					"name"              => $teacher,
					"email"             => $teacheremail,
					"contact"           => $teacherphone,
				],
				"notes"             => [
					"address"           => "registered_id",
					"merchant_order_id" => $inserted_id,
				],
				"theme"             => [
					"color"             => "#00dcf5"
				],
				"order_id"          => $razorpayOrderId,
			];

			// if ($displayCurrency !== 'INR') {
			// 	$data['display_currency']  = $displayCurrency;
			// 	$data['display_amount']    = $displayAmount;
			// }

			$json = json_encode($data);
			require("checkout.php");
			require("checkout/{$checkout}.php");
		} else {
			$log_msg = date('d-m-Y') . ': ' . 'Insert failed' . "\r";
			error_log($log_msg, 3, 'error.log');
			echo "<script>alert('Something is fishy! Please try again...');
			window.location.href='index.php';</script>";
			exit;
		}
	} catch (mysqli_sql_exception $e) {
		// If an exception is caught, log the error and redirect to error page
		$error_log = "MySQL Error: " . $e->getMessage() . " - " . date('d-M-Y h:i:s A') . "\r";
		error_log($error_log, 3, "error.log");
		// header("Location: index.php");
		echo "<script>alert('Something is fishy! Please try again...');
		window.location.href='index.php';</script>";
		exit;
	}
}

if (isset($_POST['submitReg'])) {
	try {
		// $api = new Api($keyId, $keySecret);

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>"; 
		// exit;

		$fname = $_POST['fname'];

		$lname = $_POST['lname'];
		$gender = $_POST['gender'];

		$grade = $_POST['grade'];
		$stream = $_POST['stream'];

		$interest = $_POST['interest'];
		$email = $_POST['email'];

		$phone = $_POST['phone'];
		$wphone = $_POST['wphone'];

		$sname = $_POST['sname'];
		$sbname = $_POST['sbname'];

		$saname = $_POST['saname'];
		$spname = $_POST['spname'];

		$spnumber = $_POST['spnumber'];
		$spemail = $_POST['spemail'];
		$scname = $_POST['scname'];

		$scnumber = $_POST['scnumber'];
		$scemail = $_POST['scemail'];

		$source = $_POST['source'];
		$medium = $_POST['medium'];
		$campaign = $_POST['campaign'];

		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d H:i:s');
		if ($source == "") {
			$source = 'Direct';
			$medium = 'Direct';
			$campaign = 'Direct';
		}

		$sql = "INSERT INTO `register`(`date`, `fname`, `lname`, `gender`, `grade`, `stream`, `interest`, `email`, `phone`, `wphone`, `sname`, `sbname`, `saname`, `spname`, `spnumber`, `spemail`, `scname`, `scnumber`, `scemail`, `source`, `medium`, `campaign`) VALUES ('$date','$fname','$lname','$gender','$grade','$stream','$interest','$email','$phone','$wphone','$sname','$sbname','$saname','$spname','$spnumber','$spemail','$scname','$scnumber','$scemail','$source','$medium','$campaign')";
		$status = mysqli_query($connection, $sql);
		// payment gateway

		if ($status == true) {
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
			$mail->AddAddress($email); // email
			$mail->AddAddress($spemail); // Principal Email
			$mail->AddAddress($scemail); // Coordinator Email
			//$mail->AddReplyTo(trim('mahesh.j@briskon.com'));
			// ---------------------------------------------------------

			// Content
			$mail->isHTML(true); // Set email format to HTML
			$mail->Subject = 'FOR NOT FOR International Hybrid British Parliamentary Debate Competition 2023';
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
		Thank you for registering for the <span style="font-style: italic;font-weight:bold">FOR NOT FOR International Debate Competition 2023</span> from Vijaybhoomi University. <br><br>
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
				$log_msg = date('d-m-Y') . ': ' . 'Mail Sent to ' .  $email . "\r";
				error_log($log_msg, 3, 'error.log');
			} else {
				$log_msg = date('d-m-Y') . ': ' . 'Payment Failure: ' .  $mail->ErrorInfo . "\r";
				error_log($log_msg, 3, 'error.log');
			}
		} else {
			$log_msg = date('d-m-Y') . ': ' . 'Insert failed' . "\r";
			error_log($log_msg, 3, 'error.log');
			echo "<script>alert('Something is fishy! Please try again...');
			window.location.href='index.php';</script>";
			exit;
		}
	} catch (mysqli_sql_exception $e) {
		// If an exception is caught, log the error and redirect to error page
		$error_log = "MySQL Error: " . $e->getMessage() . " - " . date('d-M-Y h:i:s A') . "\r";
		error_log($error_log, 3, "error.log");
		// header("Location: index.php");
		echo "<script>alert('Something is fishy! Please try again...');
			window.location.href='index.php';</script>";
		exit;
	}
}
