<?php


$source = $_GET['source'];
$campaign = $_GET['campaign'];
$medium = $_GET['medium'];


?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>For not for --registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/register.css" />



</head>

<body>

	<div class="page-content">




		<div class="form-v1-content">



			<div class="wizard-form">
				<form class="form-register" action="connect.php" method="POST">
					<div id="form-total">
						<!-- SECTION 1 -->
						<h2>
							<p class="step-icon"><span>01</span></p>
							<span class="step-text"> Participant's Infomation</span>
						</h2>
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">FOR NOT FOR 2022 Registration<br> Participant's Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can process your registration. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>First Name</legend>
											<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Last Name</legend>
											<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
										</fieldset>
									</div>
								</div>



								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Gender</legend>
											<select name="gender" id="gender" required>
												<option value="" disabled="" selected="">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												<option value="trans">Transgender</option>

											</select>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Standard/Grade</legend>
											<select name="grade" id="grade" required>
												<option value="" disabled="" selected="">Select Grade</option>
												<option value="11">11<sup>th</sup></option>
												<option value="12">12<sup>th</sup></option>


											</select>
										</fieldset>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Which Stream are you pursuing?</legend>
											<select name="stream" id="stream" required>
												<option value="" disabled="" selected="">Select stream</option>
												<option value="science">science</option>
												<option value="Commerce">Commerce</option>
												<option value="Humanities">Cambridge</option>
												<option value="Humanities">IB</option>
												<option value="Humanities">Others</option>


											</select>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>What would you like to study post 12th?</legend>
											<select name="interest" id="interest" required>
												<option value="" disabled="" selected="">Select Interest </option>
												<option value="Law">Law</option>
												<option value="Medical">Medical</option>
												<option value="Engineering">Engineering</option>
												<option value="Management">Management</option>
												<option value="Liberal">Liberal Arts</option>
												<option value="Design">Design</option>
												<option value="Others">Others</option>


											</select>
										</fieldset>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="email" name="email" id="email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="tel" class="form-control" id="phone" name="phone" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Whatsapp Number</legend>
											<input type="tel" class="form-control" id="wphone" name="wphone" required>
										</fieldset>
									</div>
								</div>


							</div>
						</section>
						<!-- SECTION 2 -->
						<h2>
							<p class="step-icon"><span>02</span></p>
							<span class="step-text">School/College Infomation</span>
						</h2>
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">School/College Infomation</h3>
									<p>Please enter the infomation and click on the Register Now button to regsiter. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>School/ College Name</legend>
											<input type="text" class="form-control" id="sname" name="sname" placeholder="School/College Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>School/College Branch </legend>
											<input type="text" class="form-control" id="sbname" name="sbname" placeholder="School/College Branch" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">

										<fieldset>
											<legend>School/College Adress </legend>
											<input type="text" class="form-control" id="saname" name="saname" placeholder="School/College Adress" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Principal Name</legend>
											<input type="text" class="form-control" id="spname" name="spname" placeholder="Principal Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Principal Contact Number</legend>
											<input type="tel" class="form-control" id="spnumber" name="spnumber" placeholder="Principal Contact" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Principal Email</legend>
											<input type="email" name="spemail" id="spemail" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Coordinator Name</legend>
											<input type="text" class="scname" id="scname" name="scname" placeholder="Coordinator Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Coordinator Contact Number</legend>
											<input type="tel" class="form-control" id="scnumber" name="scnumber" placeholder="Coordinator contact" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Coordinator Email</legend>
											<input type="email" name="scemail" id="scemail" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>

								<br>
								<br>

								<a href="" target="_blank"><button class="button" type="submit" value="register" name="submitReg" style="color:blue">Register Now</button></a>



							</div>
						</section>
						<!-- SECTION 3 -->
						<input type="text" name="source" style="display:none" value="<?= $source ?>">
						<input type="text" name="medium" style="display:none" value="<?= $medium ?>">
						<input type="text" name="campaign" style="display:none" value="<?= $campaign ?>">

					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>