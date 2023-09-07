<?php
$source = $_GET['source'];
$campaign = $_GET['campaign'];
$medium = $_GET['medium'];
$type = $_GET['type'];

if ($type != "Junior" && $type != "Senior") {
	echo "<script>alert('Something is fishy! Please try again...');</script>";
	echo "<script>window.location.href='index.php?source=" . $source . "&medium=" . $source . "&campaign=" . $source . "';</script>";
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>For not for - The Hybrid British Parliamentary Debate</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/register.css" />
	<!-- BootstrapValidator form -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
	<style>
		.form-register .help-block {
			color: #a94442;
			display: block;
			position: relative;
			left: 5px;
		}
	</style>

</head>

<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">

				<form class="form-register" id="hybridReg" action="connect.php" method="POST">
					<div id="form-total">
						<!-- SECTION -->
						<h2>
							<span class="step-text">The Hybrid British Parliamentary Debate</span>
						</h2>
						<h3 class="heading">FOR NOT FOR 2023 Registration For <?= $type ?></h3>
						<p class="para">Please enter your infomation so we can process your registration. </p>
						<section>
							<div class="inner">
								<div class="wizard-header"></div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Country<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="state" name="state" placeholder="Location">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>City<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="city" name="city" placeholder="City">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Participating School<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="pschool" name="pschool" placeholder="Name of the Participating School">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Branch<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="branch" name="branch" placeholder="Branch">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Official Email ID of the school<sup style="color:red;">*</sup></legend>
											<input type="email" name="ofcemail" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Principal Contact Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="principalno" placeholder="Principal Contact Number">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Principal Email Id<sup style="color:red;">*</sup></legend>
											<input type="email" name="principalemail" id="email" class="form-control" placeholder="Principal Email Id">
										</fieldset>
									</div>
									<div class="form-holder"> </div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Student<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="fname" name="student1" placeholder="Name of the Student">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Grade<sup style="color:red;">*</sup></legend>
											<select id="grade" name="studentgrade1" required>
												<option value="" disabled="" selected="">Select Grade</option>
												<?php
												if ($type == "Junior") {
													echo "<option value='9'>9</option>";
													echo "<option value='10'>10</option>";
												} else {
													echo "<option value='11'>11</option>";
													echo "<option value='12'>12</option>";
												}
												?>
											</select>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Email Id<sup style="color:red;">*</sup></legend>
											<input type="email" name="studentemail" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Phone Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="studentphone" placeholder="Phone Number">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Whatsapp Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="wphone" placeholder="Whatsapp Number">
										</fieldset>
									</div>
									<div class="form-holder form-group"> </div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Student<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="fname" name="student2" placeholder="Name of the Student">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Grade<sup style="color:red;">*</sup></legend>
											<select id="grade" name="studentgrade2" required>
												<option value="" disabled="" selected="">Select Grade</option>
												<?php
												if ($type == "Junior") {
													echo "<option value='9'>9</option>";
													echo "<option value='10'>10</option>";
												} else {
													echo "<option value='11'>11</option>";
													echo "<option value='12'>12</option>";
												}
												?>
											</select>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Email Id<sup style="color:red;">*</sup></legend>
											<input type="email" name="studentemail2" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Phone Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="studentphone2" placeholder="Phone Number">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Whatsapp Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="wphone" name="wphone2" placeholder="Whatsapp Number">
										</fieldset>
									</div>
									<div class="form-holder"> </div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Teacher / Coordinator<sup style="color:red;">*</sup></legend>
											<input type="text" class="form-control" id="fname" name="teacher" placeholder="Name of the Teacher">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Email Id<sup style="color:red;">*</sup></legend>
											<input type="email" name="teacheremail" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Phone Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="teacherphone" placeholder="Phone Number">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>WhatsApp Number<sup style="color:red;">*</sup></legend>
											<input type="tel" class="form-control" id="phone" name="twphone" placeholder="Phone Number">
										</fieldset>
									</div>
								</div>
								<div class="form-row col-12">
									<div class="form-holder form-group">
										<fieldset>
											<!-- <legend>Team Name<sup style="color:red;">*</sup></legend> -->
											<input type="text" class="form-control" id="tname" name="tname" placeholder="Team Name" style="display:none">
										</fieldset>
									</div>
								</div>
								<div class="form-row col-12">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Are you willing to travel to the Vijaybhoomi University campus in Karjat from the 30th of September to the 2nd of October, in case of qualifying to the pre-quarter-finals?<sup style="color:red;">*</sup> </legend>
											<div id="select-style">
												<select name="travel" id="travel">
													<option value="" disabled="" selected="">Select Travel</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</fieldset>
										<input type="text" class="hidden-textbox" name="travelother" id="Other" style="display:none;" height="auto">
									</div>
								</div>
								<div class="form-row col-12">
									<div class="form-holder form-group">
										<legend>
											<i><span style="color: red;"> * </span>Max 2 teams per school/branch can register.</i><br>
											<i><span style="color: red;"> * </span>The name of the student will be printed on certificate</i>
										</legend>
									</div>
								</div>
								<div class="form-row justify-content-center">
									<div class="form-holder form-group"></div>
									<div class="form-holder form-group"><button class="button" type="submit" value="register" name="submithybridReg">Register Now</button></div>
									<div class="form-holder form-group"></div>
								</div>
							</div>
						</section>
						<!-- SECTION  -->
						<input type="text" name="source" style="display:none" value="<?= $source ?>">
						<input type="text" name="medium" style="display:none" value="<?= $medium ?>">
						<input type="text" name="campaign" style="display:none" value="<?= $campaign ?>">
						<input type="text" name="type" style="display:none" value="<?= $type ?>">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<!-- <script src="js/main.js"></script>  -->
	<!-- BootstrapValidator form -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#travel').change(function() {
				if ($(this).val() == "Other") {
					$('#Other').show();
				} else {
					$('#Other').hide();
				}
			});
		});
		$(document).ready(function() {
			$('#hybridReg').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					fields: {
						state: {
							message: 'State is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'State must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'State can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						city: {
							message: 'City is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'City must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'City can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						pschool: {
							message: 'Participating school is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 75,
									message: 'Participating school must be more than 4 and less than 75 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ &]+$/,
									message: 'Participating school can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						branch: {
							message: 'Branch is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'Branch must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'Branch can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						ofcemail: {
							message: 'Official email id is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						principalno: {
							message: 'Principal contact number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//	stringLength: {
								//		min: 10,
								//		max: 10,
								//		message: 'Enter 10 digit mobile number'
								//	},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Principal contact number can only consist of number'
								}
							}
						},
						principalemail: {
							message: 'Principal email id is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						student1: {
							message: 'Student name is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'Student name must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'Student name can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						studentgrade1: {
							message: 'Grade is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						studentemail: {
							message: 'Student email id is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						studentphone: {
							message: 'Phone number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//	stringLength: {
								//		min: 10,
								//		max: 10,
								//		message: 'Enter 10 digit mobile number'
								//	},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Phone number can only consist of number'
								}
							}
						},
						wphone: {
							message: 'Whatsapp number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//	stringLength: {
								//		min: 10,
								//		max: 10,
								//		message: 'Enter 10 digit mobile number'
								//	},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Whatsapp number can only consist of number'
								}
							}
						},
						student2: {
							message: 'Student name is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'Student name must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'Student name can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						studentgrade2: {
							message: 'Grade is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						studentemail2: {
							message: 'Student email id is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						studentphone2: {
							message: 'Phone number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//	stringLength: {
								//		min: 10,
								//		max: 10,
								//		message: 'Enter 10 digit mobile number'
								//	},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Phone number can only consist of number'
								}
							}
						},
						wphone2: {
							message: 'Whatsapp number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//	stringLength: {
								//		min: 10,
								//		max: 10,
								//		message: 'Enter 10 digit mobile number'
								//	},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Whatsapp number can only consist of number'
								}
							}
						},
						teacher: {
							message: 'Teacher coordinator name is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'Teacher coordinator name must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'Teacher coordinator name can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						teacheremail: {
							message: 'Teacher email id is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						teacherphone: {
							message: 'Mobile number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//		stringLength: {
								//			min: 10,
								//			max: 10,
								//			message: 'Enter 10 digit mobile number'
								//		},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Mobile number can only consist of number'
								}
							}
						},
						twphone: {
							message: 'Mobile number is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								//		stringLength: {
								//			min: 10,
								//			max: 10,
								//			message: 'Enter 10 digit mobile number'
								//		},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'Whatsapp number can only consist of number'
								}
							}
						},
						tname: {
							message: 'Team name is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								},
								stringLength: {
									min: 4,
									max: 30,
									message: 'Team name must be more than 4 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_ ]+$/,
									message: 'Team name can only consist of alphabetical, number, space and underscore'
								}
							}
						},
						travel: {
							message: 'Travel is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
						tother: {
							message: 'Reason is not valid',
							validators: {
								notEmpty: {
									message: 'Required *'
								}
							}
						},
					}
				}).on('success.form.bv', function(e) {
					//$('#registerForm').bootstrapValidator('defaultSubmit');

					var traveltype = $("#travel").val();
					//alert(traveltype);
					if (traveltype == 'No' || traveltype == "Other") {
						if (confirm('You are only eligible for the preliminary rounds.')) {
							// Save it!
							console.log('Ok');
						} else {
							// Do nothing!
							e.preventdefault();
							console.log('Cancel');
						}

					}
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
				})
				.on('success.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
				});
		});
	</script>
</body>

</html>