<?php
require('admin/database/dbconfig.php');
require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;

// default amount
$amountz = 1000;


if (isset($_POST['submithybridReg'])) {

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

	$sql = " INSERT INTO `hybrid-registration` (`state`, city, pschool, branch, ofcemail, principalno, principalemail, student1, studentgrade1, studentemail1, studentphone, wphone, student2, studentgrade2, studentemail2, studentphone2, wphone2, teacher, teacheremail, teacherphone, twphone, tname, travel,status,createdon) VALUES ('$state', '$city' , '$pschool' , '$branch' , '$ofcemail' , '$principalno' , '$principalemail' , '$student1' , '$studentgrade1', '$studentemail1', '$studentphone', '$wphone', '$student2', '$studentgrade2', '$studentemail2', '$studentphone2', '$wphone2',  '$teacher',  '$teacheremail', '$teacherphone', '$twphone', '$tname', '$travel','1','$createdon')";
	$status = $connection->query($sql);
	// payment gateway
	if ($status) {

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
		echo "<script>alert('Something is fishy! Please try again...');
		window.location.href='the-hybrid-british-parliamentary-debate-register.php';</script>";
		$log_msg = date('d-m-Y') . ': ' . 'Insert failed' . "\r";
		error_log($log_msg, 3, 'error.log');
	}
} else {
	echo "<script>alert('Something is fishy! Please try again...');
    window.location.href='the-hybrid-british-parliamentary-debate-register.php';</script>";
}
