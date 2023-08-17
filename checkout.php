<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div id="first">
					<div class="myform form ">
						<div class="logo mb-3">
							<div class="col-md-12 text-center">
								<h1> Checkout </h1>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Full Name</label>
							<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $teacher ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $teacheremail ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Amount to be paid</label>
							<input type="number" name="amount" class="form-control" id="amount" aria-describedby="emailHelp" value="<?php echo $amountz ?>" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>