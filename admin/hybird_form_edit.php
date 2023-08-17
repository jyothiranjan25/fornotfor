<?php

require('database/dbconfig.php');
include('includes/header.php');
include('security.php');
include('includes/navbar.php');
error_reporting(0);
if (!empty($_GET['edit_id'])) {
	$regId = $_GET['edit_id'];
}
$query = " select * from `hybrid-registration` where id = '" . $regId . "' and status = 1 and markasdelete is null";
$query_run = mysqli_query($connection, $query);
if (mysqli_num_rows($query_run) > 0) {
	$row = mysqli_fetch_assoc($query_run);
	//print_r($row);
}

?>

<?php $page = 'register';  ?>


<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">

		<div class="card-header py-3">

			<h6 class="m-0 font-weight-bold text-primary">Edit Registration <?php echo $_SESSION['success']; ?>
			</h6>
		</div>

		<div class="card-body">
			<?php
			if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
				echo '<h2>' . $_SESSION['success'] . '</h2>';
				unset($_SESSION['success']);
			}

			if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
				echo '<h2 class="bg-info">' . $_SESSION['status'] . '</h2>';
				unset($_SESSION['status']);
			}

			?>

			<div class="edit-content">
				<div class="edit-form container">
					<form id="hybridReg" action="hybird_form_edit_process.php" method="post">
						<div class="row formrow">
							<input type="hidden" name="regId" value="<?php echo (!empty($row['SlNo']) ? $row['SlNo'] : ''); ?>">
							<div class="col-md-6">
								<div class="form-group">
									<label>Location</label>
									<input type="text" name="state" value="<?php echo (!empty($row['state']) ? $row['state'] : ''); ?>" class="form-control" placeholder="Location">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" name="city" value="<?php echo (!empty($row['city']) ? $row['city'] : ''); ?>" class="form-control" placeholder="City">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Name of the Participating School</label>
									<input type="text" class="form-control" id="pschool" name="pschool" value="<?php echo (!empty($row['pschool']) ? $row['pschool'] : ''); ?>" placeholder="Name of the Participating School">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Branch</label>
									<input type="text" class="form-control" id="branch" name="branch" value="<?php echo (!empty($row['branch']) ? $row['branch'] : ''); ?>" placeholder="Branch">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Official Email ID of the school</label>
									<input type="email" name="ofcemail" id="email" class="form-control" value="<?php echo (!empty($row['ofcemail']) ? $row['ofcemail'] : ''); ?>" placeholder="Email Id">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Principal Contact Number</label>
									<input type="tel" class="form-control" id="phone" name="principalno" value="<?php echo (!empty($row['principalno']) ? $row['principalno'] : ''); ?>" placeholder="Principal Contact Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Principal Email Id</label>
									<input type="email" name="principalemail" id="email" class="form-control" value="<?php echo (!empty($row['principalemail']) ? $row['principalemail'] : ''); ?>" placeholder="Principal Email Id">
								</div>
							</div>
						</div>
						<div class="row formrow">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name of the Student</label>
									<input type="text" class="form-control" id="fname" name="student1" value="<?php echo (!empty($row['student1']) ? $row['student1'] : ''); ?>" placeholder="Name of the Student">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Grade</label>
									<input type="text" class="form-control" id="grade" name="studentgrade1" value="<?php echo (!empty($row['studentgrade1']) ? $row['studentgrade1'] : ''); ?>" placeholder="Grade">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Id</label>
									<input type="email" name="studentemail" id="email" class="form-control" value="<?php echo (!empty($row['studentemail1']) ? $row['studentemail1'] : ''); ?>" placeholder="Email Id">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" class="form-control" id="phone" name="studentphone" value="<?php echo (!empty($row['studentphone']) ? $row['studentphone'] : ''); ?>" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Whatsapp Number</label>
									<input type="tel" class="form-control" id="phone" name="wphone" value="<?php echo (!empty($row['wphone']) ? $row['wphone'] : ''); ?>" placeholder="Whatsapp Number">
								</div>
							</div>
						</div>
						<div class="row formrow">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name of the Student</label>
									<input type="text" class="form-control" id="fname" name="student2" value="<?php echo (!empty($row['student2']) ? $row['student2'] : ''); ?>" placeholder="Name of the Student">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Grade</label>
									<input type="text" class="form-control" id="grade" name="studentgrade2" value="<?php echo (!empty($row['student2']) ? $row['student2'] : ''); ?>" placeholder="Grade">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Id</label>
									<input type="email" name="studentemail2" id="email" class="form-control" value="<?php echo (!empty($row['studentemail2']) ? $row['studentemail2'] : ''); ?>" placeholder="Email Id">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" class="form-control" id="phone" name="studentphone2" value="<?php echo (!empty($row['studentphone2']) ? $row['studentphone2'] : ''); ?>" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Whatsapp Number</label>
									<input type="tel" class="form-control" id="wphone" name="wphone2" value="<?php echo (!empty($row['wphone2']) ? $row['wphone2'] : ''); ?>" placeholder="Whatsapp Number">
								</div>
							</div>
						</div>
						<div class="row formrow">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name of the Teacher Coordinator</label>
									<input type="text" class="form-control" id="fname" name="teacher" value="<?php echo (!empty($row['teacher']) ? $row['teacher'] : ''); ?>" placeholder="Name of the Teacher Coordinator">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Id</label>
									<input type="email" name="teacheremail" id="email" class="form-control" value="<?php echo (!empty($row['teacheremail']) ? $row['teacheremail'] : ''); ?>" placeholder="Email Id">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" class="form-control" id="phone" name="teacherphone" value="<?php echo (!empty($row['teacherphone']) ? $row['teacherphone'] : ''); ?>" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Team Name </label>
									<input type="text" class="form-control" id="lname" name="tname" value="<?php echo (!empty($row['tname']) ? $row['tname'] : ''); ?>" placeholder="Team Name (for Hybrid Format) ">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Are you willing to travel to the Vijaybhoomi University campus in Karjat from the 22nd to the 25th of September, in case of qualifying to the pre-quarter-finals? </label>
									<div id="select-style">
										<select name="travel" class="form-control" id="travel">
											<!-- <option disabled="" selected="<?php echo (!empty($row['travel']) ? $row['travel'] : ''); ?>"><?php echo (!empty($row['travel']) ? $row['travel'] : 'Select Travel'); ?></option> -->
											<option value="Yes" <?php echo (($row['travel'] == 'Yes') ? 'selected' : ''); ?>>Yes</option>
											<option value="No" <?php echo (($row['travel'] == 'No') ? 'selected' : ''); ?>>No</option>
											<option value="Other" <?php echo (($row['travel'] == 'Other') ? 'selected' : ''); ?>>Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" class="btn btn-success" name="edithybirdReg">Submit</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>

</div>
<!-- /.container-fluid -->

<script>
	$(document).ready(function() {
		$('#user_table').DataTable();
	});
</script>

<script type="text/javascript">
	$(document).ready(function()

		{
			$('[data-toggle="tooltip"]').tooltip();
			$(document).on("click", ".edit", function() {
				var input = $(this).parents("tr").find("input[type='text']");
				input.each(function() {
					$(this).removeAttr('disabled');
				});
				$(this).parents("tr").find(".add , .edit").toggle();
			});
		}

	);
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
								message: 'State can only consist of alphabetical, number and underscore'
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
								message: 'City can only consist of alphabetical, number and underscore'
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
								max: 30,
								message: 'Participating school must be more than 4 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_ ]+$/,
								message: 'Participating school can only consist of alphabetical, number and underscore'
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
								message: 'Branch can only consist of alphabetical, number and underscore'
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
								message: 'Student name can only consist of alphabetical, number and underscore'
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
								message: 'Required *'
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
								message: 'Student name can only consist of alphabetical, number and underscore'
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
					wphone2: {
						message: 'Whatsapp number is not valid',
						validators: {
							notEmpty: {
								message: 'Required *'
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
								message: 'Teacher coordinator name can only consist of alphabetical, number and underscore'
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
							stringLength: {
								min: 10,
								max: 10,
								message: 'Enter 10 digit mobile number'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'Mobile number can only consist of number'
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
								message: 'Team name can only consist of alphabetical, number and underscore'
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>