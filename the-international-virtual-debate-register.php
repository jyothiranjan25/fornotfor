<?php


$source = $_GET['source'];
$campaign = $_GET['campaign'];
$medium = $_GET['medium'];


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>For not for - The International Virtual Debate</title>
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
				<form class="form-register" id="registerForm" action="international-connect.php" method="POST">
					<div id="form-total">
						<!-- SECTION -->
						<h2>
							<span class="step-text">The International Virtual Debate</span>
						</h2>
						<h3 class="heading">FOR NOT FOR 2023 Registration</h3>
						<p class="para">Please enter your infomation so we can process your registration. </p>
						<section>
							<div class="inner">
								<div class="wizard-header"></div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Country</legend>
											<!--- Country -->
											<input type="text" class="form-control" id="country" name="country" placeholder="Country">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>State</legend>
											<input type="text" class="form-control" id="state" name="state" placeholder="State">
										</fieldset>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-group">
										<fieldset>
											<legend>City</legend>
											<input type="text" class="form-control" id="city" name="city" placeholder="City">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Participating School</legend>
											<input type="text" class="form-control" id="pschool" name="pschool" placeholder="Name of the Participating School">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Branch</legend>
											<input type="text" class="form-control" id="branch" name="branch" placeholder="Branch">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Official Email ID of the school</legend>
											<input type="email" name="ofcemail" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Principal Contact Number</legend>
											<input type="tel" class="form-control" id="phone" name="principalno" placeholder="Principal Contact Number">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Principal Email Id</legend>
											<input type="email" name="principalemail" id="email" class="form-control" placeholder="Principal Email Id">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Name of the Student</legend>
											<input type="text" class="form-control" id="fname" name="student1" placeholder="Name of the Student">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Grade</legend>
											<input type="text" class="form-control" id="grade" name="studentgrade1" placeholder="Grade">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Email Id</legend>
											<input type="email" name="studentemail" id="email" class="form-control" placeholder="Email Id">
										</fieldset>
									</div>
									<div class="form-holder form-group">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="tel" class="form-control" id="phone" name="studentphone" placeholder="Phone Number">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-group">
										<fieldset>
											<legend>Whatsapp Number</legend>
											<input type="tel" class="form-control" id="phone" name="wphone" placeholder="Whatsapp Number">
										</fieldset>
									</div>
									<div class="form-holder form-group"> </div>
								</div>


								<div class="form-row justify-content-center">

									<div class="form-holder form-group"></div>

									<div class="form-holder form-group"><button class="button" type="submit" value="register" name="submitReg">Register Now</button></div>

									<div class="form-holder form-group"></div>
								</div>
							</div>
						</section>
						<!-- SECTION  -->
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
			})
		});
		$(document).ready(function() {
			$('#registerForm').bootstrapValidator({
				message: 'This value is not valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					country: {
						message: 'Country is not valid',
						validators: {
							notEmpty: {
								message: 'Country is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'Country must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'Country can only consist of alphabetical, number and underscore'
							}
						}
					},
					state: {
						message: 'State is not valid',
						validators: {
							notEmpty: {
								message: 'State is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'State must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'State can only consist of alphabetical, number and underscore'
							}
						}
					},
					city: {
						message: 'City is not valid',
						validators: {
							notEmpty: {
								message: 'City is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'City must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'City can only consist of alphabetical, number and underscore'
							}
						}
					},
					pschool: {
						message: 'Participating school is not valid',
						validators: {
							notEmpty: {
								message: 'Participating school name is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'Participating school must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'Participating school can only consist of alphabetical, number and underscore'
							}
						}
					},
					branch: {
						message: 'Branch is not valid',
						validators: {
							notEmpty: {
								message: 'Branch is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'Branch must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'Branch can only consist of alphabetical, number and underscore'
							}
						}
					},
					ofcemail: {
						message: 'Official email id is not valid',
						validators: {
							notEmpty: {
								message: 'Official email id of the school is required and cannot be empty'
							}
						}
					},
					principalno: {
						message: 'Principal contact number is not valid',
						validators: {
							notEmpty: {
								message: 'Principal contact number is required and cannot be empty'
							},
							stringLength: {
								min: 10,
								max: 10,
								message: 'Enter 10 digit mobile number'
							},
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
								message: 'Principal email id is required and cannot be empty'
							}
						}
					},
					student1: {
						message: 'Student name is not valid',
						validators: {
							notEmpty: {
								message: 'Student name is required and cannot be empty'
							},
							stringLength: {
								min: 4,
								max: 30,
								message: 'Student name must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'Student name can only consist of alphabetical, number and underscore'
							}
						}
					},
					studentgrade1: {
						message: 'Grade is not valid',
						validators: {
							notEmpty: {
								message: 'Grade is required and cannot be empty'
							}
						}
					},
					studentemail: {
						message: 'Student email id is not valid',
						validators: {
							notEmpty: {
								message: 'Student email id is required and cannot be empty'
							}
						}
					},
					studentphone: {
						message: 'Phone number is not valid',
						validators: {
							notEmpty: {
								message: 'Phone number is required and cannot be empty'
							},
							stringLength: {
								min: 10,
								max: 10,
								message: 'Enter 10 digit mobile number'
							},
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
								message: 'Whatsapp number is required and cannot be empty'
							},
							stringLength: {
								min: 10,
								max: 10,
								message: 'Enter 10 digit mobile number'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'Whatsapp number can only consist of number'
							}
						}
					},
				}
			}).on('success.form.bv', function(e) {
				//$('#registerForm').bootstrapValidator('defaultSubmit');			
			});
		});
	</script>
</body>

</html>