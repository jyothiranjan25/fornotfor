<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registeration for AURA 2021</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta name="google-site-verification" content="fh_2JRuhWXYtyMFwK6YHHx3-5IJ9VBh7S_C9Pac_joE" />

	<meta charset="UTF-8">
	<meta name="description" content=" Revamp. Recreate. Remould , Aura is the locus of human social, cultural and intellectual development which solicits the artistry, expressiveness and ingenuity from a divergent band of students with a pupose of instilling tolerance and respect for contrasting ethnicities and brainpower. ">
	<meta name="keywords" content="aura,registration ,  ifim, vijaybhoomi , for not for , colleges , electronic city , ifim 2021 events , aura rinovamento , Aura 2021 , aurarinnovamento2021@gmail.com,  Ignite film fest , managerial events , solo dance, digital events , beat boxing , literary events , best manager , instagram reels contest ">
	<meta name="author" content="kunal Sahu">


	<!-- MATERIAL DESIGN ICONIC FONT -->
	<!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="assets/css/style_pay.css">
</head>

<body>
	<div class="wrapper" style="background-image: url('assets/img/bg_reg.jpg');">
		<div class="inner">
			<a href="index.php"> Cancel this transaction</a>
			<form action="connect.php" method="POST">
				<h3>Register Here</h3>
				<div class="form-wrapper">
					<label for=""> Name</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-wrapper">
					<label for="">Email</label>
					<!-- <input type="email" class="form-control" name="email" required> -->
					<input type="email" class="form-control" name="email" required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$">
				</div>
				<div class="form-wrapper">
					<label for="">Phone Number</label>
					<input type="tel" class="form-control" name="phone" pattern="^\d{10}$" required>
				</div>
				<div class="form-wrapper">
					<label for="">College</label>
					<input type="text" class="form-control" name="college" required>
				</div>
				<div class="form-wrapper">
					<label for="">College/School ID</label>
					<input type="text" class="form-control" name="college_id" required>
				</div>
				<div class="form-wrapper">
					<label for="birthday">Please Enter your Date of birth:</label>
					<input type="date" class="form-control" name="dob" min="1970-01-01" max="2019-12-31" required>
				</div>
				<div class="form-wrapper ">
					<select id="ticket-type" name="category" class="form-control" style="width: 100%;;">
						<option selected>-- Select Your Event Type --</option>
						<option value="Solo_Dance">Solo Dance (Cultural Event)</option>
						<option value="Solo_singing">Solo singing (Cultural Event)</option>
						<option value="Beat_Boxing">Beat Boxing (Cultural Event)</option>
						<option value="Mono_Act">Mono-Act (Cultural Event)</option>
						<option value="Photography">Photography (Cultural Event)</option>
						<option value="Instagram">Instagram Reels Contest (Cultural Event)</option>

						<option value="Business_Quiz">Business Quiz (Managerial Event)</option>
						<option value="Best_manager">Best Manager Event (Managerial Event)</option>
						<!-- <option  value="Finance_Event">Finance Event (Case Study) (Managerial Event)</option> -->
						<option value="Marketing_Event">Marketing Event (Managerial Event)</option>

						<option value="Elocution">Elocution (Literary Event)</option>
						<option value="Turn_Coat">Turn Coat (Literary Event)</option>
						<option value="Recitation">Recitation (Literary Event)</option>
						<option value="Original_Story">Original Story Narration (Literary Event)</option>
					</select>
				</div>
				<!-- <div class="container"  id="qr">
						<img src="assets/img/qr.jpeg" alt="" >
					</div> -->
				<!-- <div class="form-wrapper" style="padding-top:20px">
					<h3 style="text-align:center;  font-size:15px; "> UPI ID:- <span style=" color:red; font-size:15px"> akshat.01verma@okhdfcbank </span> </h3>
				</div>
				<div class="form-wrapper" style="padding-top:20px">
					<input class="form-control" type="text" placeholder="Transaction id " name="res_code">
				</div> -->
				<!-- <a href="https://bitbns.freshdesk.com/support/solutions/articles/35000150215-how-do-i-find-my-transaction-reference-number-" target="_blank">
					Whats my transaction id?</a> -->
				<div class="checkbox">
					<label>
						<input type="checkbox">I accept the <a href="assets/documents/termsandcondition.docx" target="_blank">terms & conditions</a> of AURA 2021
						<span class="checkmark"></span>
					</label>
				</div>
				<!-- <input class="btn button btn--radius btn--green" type="submit" value="Register" name="submit"> -->
				<button type="submit" value="Register" name="submit">Register Now</button>
				<div class="form-wrapper" style="padding-top:20px">
					<h4 style="text-align:center;  color:red; font-size:15px">
						For any payment related related queries <br>Contact : Akshat Verma :- 7000844682 </h4>
				</div>
				<div class="copyright" style="text-align: center;">
					&copy; Copyright <strong>Aura 2021</strong>
				</div>
			</form>
		</div>
	</div>

</body>

</html>