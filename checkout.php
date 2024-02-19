<!DOCTYPE html>
<html lang="en">

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

		body,
		html {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		.page-content {
			height: 100%;
		}
	</style>

</head>

<body>
	<div class="page-content container">
		<div class="form-v1-content">
			<div class="wizard-form">
				<form class="form-register">
					<div id="first">
						<div id="form-total">
							<!-- SECTION -->
							<h2>
								<span class="step-text">The Hybrid British Parliamentary Debate</span>
							</h2>
							<h3 class="heading">FOR NOT FOR 2023 Registration</h3>
							<!-- <p class="para">Please enter your infomation so we can process your registration. </p> -->
							<section>
								<div class="inner">
									<div class="form-row">
										<div class="form-holder form-group">
											<fieldset>
												<legend>Full Name<sup style="color:red;">*</sup></legend>
												<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $teacher ?>" readonly>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-group">
											<fieldset>
												<legend>Email address<sup style="color:red;">*</sup></legend>
												<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $teacheremail ?>" readonly>
											</fieldset>
										</div>
									</div>
									<!-- <div class="form-row">
										<div class="form-holder form-group">
											<fieldset>
												<legend>Amount to be paid including GST<sup style="color:red;">*</sup></legend>
												<input type="number" name="amount" class="form-control" id="amount" aria-describedby="emailHelp" value="<?php echo $amountz ?>" readonly>
											</fieldset>
										</div>
									</div> -->
									<div class="form-row col-12">
										<div class="form-holder form-group">
											<legend>
												<h3 style="text-align: right; color:black;">Registration Amount: <?php echo $amountR ?></h3>
												<h3 style="text-align: right; color:black;">GST Amount (18%): <?php echo $gstAmount ?></h3>
												<h3 style="text-align: right; color:black;">Amount to be paid: <?php echo $amountz ?></h3>
											</legend>
										</div>
									</div>
									<div class="form-row justify-content-center">
										<div class="form-holder form-group"><button class="button" id="rzp-button1">Pay Now</button></div>
									</div>
								</div>
							</section>
						</div>
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