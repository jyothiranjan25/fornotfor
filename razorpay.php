<?php

require('admin/database/dbconfig.php');
require('razorpay-php/Razorpay.php');
session_start();
error_reporting(0);
// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
if (isset($_POST['submit'])) {

	$orderz = $_POST['uin'];
	$namez = $_POST['name'];
	$emailz = $_POST['email'];
	$contactz = $_POST['phone'];
	$amountz = $_POST['amount'];




}
