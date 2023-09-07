<?php
error_reporting(0);

include 'admin/database/dbconfig.php';
$source = $_GET['source'];
$campaign = $_GET['campaign'];
$medium = $_GET['medium'];

//Registration End date formate yyyy-mm-dd
$RegEndDate = "2023-09-30";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FOR NOT FOR</title>
	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- ** Plugins Needed for the Project ** -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- slick slider -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!-- animation css -->
	<link rel="stylesheet" href="plugins/animate/animate.css">
	<!-- aos -->
	<link rel="stylesheet" href="plugins/aos/aos.css">
	<!-- venobox popup -->
	<link rel="stylesheet" href="plugins/venobox/venobox.css">
	<!-- Main Stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/linearicons.css" rel="stylesheet">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-icons.css">
	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>
	<!-- header -->
	<?php include_once "header.php"; ?>
	<!-- /header -->
	<!-- Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content rounded-0 border-0 p-4">
				<div class="modal-header border-0">
					<h3>Register</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body">
					<div class="login">
						<form action="#" class="row">
							<div class="col-12">
								<input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
							</div>
							<div class="col-12">
								<input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
							</div>
							<div class="col-12">
								<input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
							</div>
							<div class="col-12">
								<input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary">SIGN UP</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content rounded-0 border-0 p-4">
				<div class="modal-header border-0">
					<h3>Login</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body">
					<form action="#" class="row">
						<div class="col-12">
							<input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
						</div>
						<div class="col-12">
							<input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
						</div>
						<div class="col-12">
							<input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">LOGIN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- hero slider -->
	<section class="hero-section overlay bg-cover" data-background="images/bg1.jpg">
		<div class="container">
			<div class="row mob_res" style="margin-left: 0px;">
				<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 des_hero">
					<div class="hero-slider ">
						<!-- slider item -->
						<div class="hero-slider-item">
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Want to have the most Influential Debate of all time? Battle it Out - 2v2 between 14th October and 5th November.</h1>
									<!-- <p class="text-muted mb-4" style="font-size: 22px;" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4"> For Not For 2022, the second virtual edition is to be held between 2nd October 2022 and 10th October. </p> <a href="register_closed.php?source=<?= $source ?>&medium=<?= $medium ?>&campaign=<?= $campaign ?>" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register now</a>-->
								</div>
							</div>
						</div>
						<!-- slider item -->
						<div class="hero-slider-item">
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">The first-ever Hybrid British Parliamentary Debate for for Junior and High School students to be organized by a University in India.</h1><!-- <a href="register_closed.php?source=<?= $source ?>&medium=<?= $medium ?>&campaign=<?= $campaign ?>" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Register now</a>-->
								</div>
							</div>
						</div>
						<!-- slider item -->
						<div class="hero-slider-item">
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Join us at the Vijaybhoomi University campus to develop your skills with expert sessions and fun activities! For Not For 2023, is back and this time it is BIGGER and BETTER. </h1><!-- <a href="register_closed.php?source=<?= $source ?>&medium=<?= $medium ?>&campaign=<?= $campaign ?>" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Register now</a>-->
									<!-- <h4 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Accommodation will be provided by FNF team.</h4> -->
								</div>
							</div>
						</div>
						<!-- slider item -->
						<div class="hero-slider-item">
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Win up to <b>₹ 2.6 lakh</b> worth of Cash Prizes, Scholarship & Internship Offers, lot more. Earn yourselves an opportunity to be a part of our <b>Leadership Retreat Camp!</b></h1> <!--<a href="register_closed.php?source=<?= $source ?>&medium=<?= $medium ?>&campaign=<?= $campaign ?>" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Register now</a>-->
									<!-- <h4 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Accommodation will be provided by FNF team.</h4> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<div class="container reg_form">
						<div class="row hero-slider-item">
							<div class="col-md-12">
								<h3 class="text-white">Hybrid British Parliamentary Debate – Junior and Senior Competition</h3>
							</div>
							<div class="col-md-12">
								<?php if (time() > strtotime($RegEndDate)) {
									echo '<a href="register_closed.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register Now</a><br><br>';
								} else {
									echo '<a href="the-hybrid-british-parliamentary-debate-register.php?type=Junior&source=' . $source . '&medium=' . $medium . '&campaign=' . $campaign . '" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register Now for Junior</a><br><br>';
									echo '<a href="the-hybrid-british-parliamentary-debate-register.php?type=Senior&source=' . $source . '&medium=' . $medium . '&campaign=' . $campaign . '" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register Now for Senior</a><br><br>';
								}
								?>
								<!-- <a href="register_hold.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register Now</a><br><br> -->
							</div>
							<!-- <div class="col-md-12">
								<a href="the-international-virtual-debate-register.php?source=<?= $source ?>&medium=<?= $medium ?>&campaign=<?= $campaign ?>" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">International Virtual Debate</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- /hero slider -->
	<!-- banner-feature -->
	<section class="fnp22">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 col-sm-12">
					<div class="banner-temp">
						<a href="https://vijaybhoomi.edu.in/fornotfor/" target="_blank"><img class="img-fluid w-100 shadow-sharp poster" src="images/fnf-poster-2023.jpg" alt="banner-feature"></a>
					</div>
				</div>

				<div class="col-lg-6 col-sm-12">
					<div class="card">
						<div class="card-block p-3 card-one">
							<div class="row">
								<div class="col-md-2"><i class="ti-microphone mb-0 feature-icon"></i></div>
								<div class="col-md-10">
									<div class="fnfbox">
										<h4 class="card-title mb-0">FNF 2023 - The Hybrid British Parliamentary Debate from
											October 14<sup>th</sup> to November 5<sup>nd</sup></h4>
									</div>
								</div>
							</div>
							<br>
							<li>FNF 2023 Junior Competition: For grade 9 and 10</li>
							<li>FNF 2023 Senior Competition: For grade 11 and 12</li>
							<ul class="objectives">
								<li><i>Preliminary Rounds</i> for Junior and Senior Competitions will be held <b>virtually</b> on 14<sup>th</sup> and 15<sup>th</sup> October where 32 teams will qualify to the Pre- Quarter round.</li>
								<li><i>Pre - Quarter</i> Round for Junior and Senior Competitions will be held <b>virtually</b> on 21<sup>st</sup> and 22<sup>nd</sup> October where 32 teams will qualify to the Quarter round.</li>
								<li><i>16 teams</i> that qualify for the <i>Quarter Finals</i> for both Junior and Senior Competition will be travelling to the Vijaybhoomi Campus (Karjat, Maharashtra) to battle it out offline at the FNF Leadership Retreat on 4<sup>th</sup> and 5<sup>th</sup> November.</li>
								<li>Junior and Senior Rounds will be held separately.</li>
								<li>Junior and Senior Teams from the same school need to register separately.</li>
								<li>Teams of 2 students need to register.</li>
								<li>British Parliamentary Debate format for Junior and Senior competitions.</li>
							</ul>
							<p style="font-size:11px;">Teams participating in the Leadership Retreat rounds will need to organize their own accommodation and transport from the station / airport to and from. VU will be happy to help in getting accommodation at affordable rates close to the campus.</p>
							<p class="text-center"><a href="hybrid-british-parliamentary-debate.php" class="card-link">Read More</a></p>
						</div>
					</div>
					<div class="card retreat22">
						<div class="card-block p-3">
							<div class="row">
								<div class="col-md-2"><i class="ti-gift mb-0 feature-icon"></i></div>
								<div class="col-md-10">
									<div class="fnfbox" id="fbx">
										<h4 class="card-title mb-0">FNF - Leadership Retreat from 4<sup>th</sup> and 5<sup>th</sup> November</h4>
									</div>
								</div>
							</div>
							<ul class="objectives">
								<li>FNF Quarter, Semi-final and Final rounds</li>
								<li>Workshops on Design, Data Science, Music, Business, Entrepreneurship and Law</li>
								<li>Trek and sports activities</li>
								<li>Fun Networking sessions and campfire at night</li>
								<li>Motivational talks by experts</li>
							</ul>
							<p class="text-center"> <a href="leadership-retreat.php" class="card-link">Read More</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="card">
						<div class="card-block p-3 card-four">
							<div class="row">
								<div class="col-md-2"><i class="ti-user mb-0 feature-icon"></i></div>
								<div class="col-md-10">
									<div class="fnfbox" id="fbx">
										<h4 class="card-title mb-0">FNF - Initium</h4>
									</div>
								</div>
							</div>
							<ul class="objectives">
								<li>For-Not-For is not only about debating. To make the anticipation easier and keep the participants pumped up in the build-up to the Competition, the <i>Organising Committee</i> of FNF has prepared a set of fun Activities, Contests and Events in the form of a Pre-event Engagement Programme that we call “<i><b>Initium</b></i>”. </li>
								<li>All registered participants are encouraged to take part in these activities virtually and we provide exciting prizes to the winners.</li>
								<li><i>Initium</i> consisted of fun activities, and it consisted of games such as Motion Contest, Caption Contest, and Meme Contest, Live Game Session.</li>
								<li><i>Initium</i> 2023 is going to be bigger and better as we have a lot more exciting activities and workshops lined up for you. </li>
							</ul>
							<p class="text-center"> <a href="initium.php" class="card-link">Read More</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="card">
						<div class="card-block p-3 card-three">
							<div class="row">
								<div class="col-md-2"><i class="ti-user mb-0 feature-icon"></i></div>
								<div class="col-md-10">
									<div class="fnfbox" id="fbx">
										<h4 class="card-title mb-0">FNF 2023 Prizes</h4>
									</div>
								</div>
							</div>
							<ul class="objectives">
								<li>1st prize - 1000$ / Rs. 85000 for Junior and Senior Competitions.</li>
								<li>2nd prize - 500 $ / Rs. 45000 for Junior and Senior Competitions.</li>
								<li>Prizes and Merit Certificates for 3rd and 4th place for both competitions.</li>
								<li>Merit Certificates for Pre- Quarter, Quarter and Semi.</li>
								<li>Participation Certificates to all.</li>
							</ul>
							<p class="text-center"> <a href="fnf-2022-prizes.php" class="card-link">Read More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /banner-feature -->
	<!-- about us -->
	<section class="section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-sm-7">
					<div class="bg-white" style="box-shadow: 0 14px 28px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 22%); padding: 25px">
						<h2 class="section-title">FOR NOT FOR 2023</h2>
						<p>FNF 2023 will have two competitions for different grades, Junior and Senior following the same format, which is a hybrid model in the British Parliamentary Debate format. The debate rounds will be between 14<sup>th</sup> October and 5<sup>th</sup> November with a Virtual Preliminary and Pre- Quarter round and the Quarters, Semi and Final Rounds on 4<sup>th</sup> and 5<sup>th</sup> November as a part of an Offline Leadership Retreat at our Vijaybhoomi campus in Karjat.</p>
						<h3 class="section-title">British Parliamentary Debate Format</h3>
						<p>FNF 2023 debating rounds will follow the British Parliamentary Style Debate. This style of debating is one of the more popular forms, based on debates in the British Parliament. It was first adopted by UK universities but is now popular in debating competitions around the world. Much like in the House of Commons, the debate is split into two opposing sides: the proposition (or government), and the opposition. Each side is then further divided into ‘opening’ and ‘closing’ teams, all four of which have two speakers. These are named after their equivalent positions in the British Parliament.</p>
						<h3 class="section-title">Skill Building Workshops</h3>
						<p>FNF 2023 brings to you debating and a lot more. Skills to make you a leader of the 21st Century, a leader with strong persuasive skills, adept at critical thinking, innovation, keen sense of creativity and out of the box views. FNF, as in the past, will help you build these vital skills in a variety of platforms.</p>
						<!-- <h3 class="section-title">INITIUM</h3>
						<p>FNF 2023 will build these skills through Initium, the virtual skill building series which will be conducted by experts before the Preliminaries. Participants will receive vital advice on how to conduct themselves as well as making arguments in sessions. You will also get a chance to get to know other participants through some fun sessions.</p> -->
						<!-- <h3 class="section-title">LEADERSHIP RETREAT</h3>
						<p>Tucked in between the majestic valleys of Karjat, VijayBhoomi University is the perfect location to grow one’s life skills, gearing them up for future endeavors. For Not For 2023, aims to offer more than just a parliamentary debate competition. Coupled with the intense final rounds of the debate, participants who qualify for the Quarters will be given the unprecedented opportunity to attend the Leadership Retreat at VU. Participants will be able to experience many activities ranging from a fun networking event to workshops on specialized domains like entrepreneurship, design, music, business to an awe-inducing trek of the Karjat hills. Each event adds its own life skill as a valued outcome.</p> -->
						<p class="mb-0"> <a href="leadership-retreat.php" class="card-link">Learn More</a>
					</div>
				</div>
				<div class="col-md-5 order-1 order-md-2 mb-4 mb-md-0">
					<div class="lractivity"><img class="img-fluid w-100" style="border-radius: 10px; opacity: 0.9;" src="images/leadership-retreat-activities.png" alt="about image"></div>
				</div>

			</div>
		</div>
	</section>
	<!-- /about us -->
	<!-- about us -->
	<section class="section calendar">
		<div class="container-fluid">
			<h2 class="text-center mb-5 test1">Calendar of Activities – Initium 2022</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="calendar-one">
						<img class="img-fluid w-100" src="images/fnf-calendar.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/tarun-poster.png"></div>
						</div>
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/game-poster.png"></div>
						</div>
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/rahul-poster.png"></div>
						</div>
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/afreen-poster.png"></div>
						</div>
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/meme-motion.png"></div>
						</div>
						<div class="col-md-6">
							<div class="poster"><img class="img-fluid w-100" src="images/vignesh-poster.png"></div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="section">
		<div class="container">
			<h2 class="text-center mb-5 test1">2022 - Testimonials</h2>
			<div class="row">
				<div class="col-md-6 mb-5">
					<a href="#" data-toggle="modal" data-target="#FNFTestimonials2022-1"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/FNFTestimonials2022 - 01.jpg">
						<p class="btn w-100 click">Click here</p>
					</a>
				</div>
				<div class="col-md-6 mb-5"><a href="#" data-toggle="modal" data-target="#FNFTestimonials2022-2"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/FNFTestimonials2022 - 02.jpg">
						<p class="btn w-100 click">Click here</p>
					</a></div>
				<div class="col-md-6">
					<a href="#" data-toggle="modal" data-target="#FNFTestimonials2022-3"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/FNFTestimonials2022 - 04.jpg" alt="about image">
						<p class="btn w-100 click">Click here</p>
					</a>
				</div>
				<div class="col-md-6">
					<a href="#" data-toggle="modal" data-target="#FNFTestimonials2022-4"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/FNFTestimonials2022 - 03.jpg" alt="about image">
						<p class="btn w-100 click">Click here</p>
					</a>
				</div>

			</div>
		</div>
		<br>
		<div class="container">
			<h2 class="text-center mb-5 test1">2021 - Testimonials</h2>
			<div class="row">
				<div class="col-md-6 mb-5">
					<a href="#" data-toggle="modal" data-target="#judge1"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/judge-01.jpg">
						<p class="btn w-100 click">Click here</p>
					</a>
				</div>
				<div class="col-md-6 mb-5"><a href="#" data-toggle="modal" data-target="#judge2"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/judge-02.jpg">
						<p class="btn w-100 click">Click here</p>
					</a></div>

				<div class="col-md-6"><a href="#" data-toggle="modal" data-target="#fiona"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/fiona-raj2.jpg" alt="about image">
						<p class="btn w-100 click">Click here</p>
					</a></div>
				<div class="col-md-6">
					<a href="#" data-toggle="modal" data-target="#ratyansh"><img class="img-fluid w-100" style="opacity: 0.9;" src="images/ratyansh2.jpg" alt="about image">
						<p class="btn w-100 click">Click here</p>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- milestones -->
	<?php include_once "milestones.php"; ?>
	<!-- milestones -->

	<!-- Voice -->
	<section class="fnp22 ">
		<h2 class="text-center">The Voice of 2021</h5>

			<div class="container my-5">

				<!--Carousel Wrapper-->
				<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

					<!--Controls-->
					<!-- <div class="controls-top">
						<a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div> -->
					<!--/.Controls-->

					<!--Indicators-->
					<ol class="carousel-indicators">
						<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
						<li data-target="#multi-item-example" data-slide-to="1"></li>
						<li data-target="#multi-item-example" data-slide-to="2"></li>
						<li data-target="#multi-item-example" data-slide-to="3"></li>
						<li data-target="#multi-item-example" data-slide-to="4"></li>
						<li data-target="#multi-item-example" data-slide-to="5"></li>
					</ol>
					<!--/.Indicators-->

					<!--Slides-->
					<div class="carousel-inner" role="listbox">

						<!--First slide-->
						<div class="carousel-item active">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/aarzu-malhotra.png" alt="Aarzu Malhotra">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/advika-prasad.png" alt="Advika Prasad">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/afrah-aneez.png" alt="Afrah Aneez">
									</div>
								</div>
							</div>

						</div>
						<!--/.First slide-->

						<!--Second slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/ahona-chakraborty.png" alt="Ahona Chakraborty">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/anahita-singh.png" alt="Anahita Singh">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/fiona-raj.png" alt="Fiona Raj">
									</div>
								</div>
							</div>

						</div>
						<!--/.Second slide-->

						<!--Third slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/koiki-manning.png" alt="Koiki Mmanning">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/lipi-bhansali.png" alt="Lipi Bhansali">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/manasha-baral.png" alt="Manasha Baral">
									</div>
								</div>
							</div>

						</div>
						<!--/.Third slide-->
						<!-- slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/neal-jhawar.png" alt="Neal Jhawar">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/ratyanash-garg.png" alt="Ratyanash Garg">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/sam-sargam-sheetal.png" alt="Sam Sargam Seetal">
									</div>
								</div>
							</div>

						</div>
						<!--/. slide-->
						<!-- slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/shataaxi-chauhan.png" alt="Shataaxi Chauhan">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/sourav-deb.png" alt="Sourav Deb">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/victoria-honoridez.png" alt="Victoria Honoridez">
									</div>
								</div>
							</div>

						</div>
						<!--/.Third slide-->
						<!--Third slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/yashwardhan-sharma.png" alt="Yashwardhan Sharma">
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/sam-sargam-sheetal.png" alt="Sam Sargam Seetal">
									</div>
								</div>
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="images/testimonial/shataaxi-chauhan.png" alt="Shataaxi Chauhan">
									</div>
								</div>
							</div>
						</div>
						<!--/ slide-->
					</div>
					<!--/.Slides-->
				</div>
				<!--/.Carousel Wrapper-->
			</div>

	</section>
	<!-- /Voice -->

	<!-- Highlights -->
	<section class="fnp22 bg-gray">
		<h2 class="text-center">Highlights of 2022</h5>

			<div class="container my-5">

				<!--Carousel Wrapper-->
				<!-- <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel"> -->

				<!--Controls-->
				<!-- <div class="controls-top">
						<a class="btn-floating waves-effect waves-light leftarr" href="#multi-item-example3" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="btn-floating waves-effect waves-light rightarr" href="#multi-item-example3" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div> -->
				<!--/.Controls-->

				<!--Indicators-->
				<!-- <ol class="carousel-indicators">
						<li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
						<li data-target="#multi-item-example3" data-slide-to="1"></li>
						<li data-target="#multi-item-example3" data-slide-to="2"></li>
						<li data-target="#multi-item-example3" data-slide-to="3"></li>
						<li data-target="#multi-item-example3" data-slide-to="4"></li>
						<li data-target="#multi-item-example3" data-slide-to="5"></li>
						<li data-target="#multi-item-example3" data-slide-to="6"></li>
						<li data-target="#multi-item-example3" data-slide-to="7"></li>
						<li data-target="#multi-item-example3" data-slide-to="8"></li>
						<li data-target="#multi-item-example3" data-slide-to="9"></li>
						<li data-target="#multi-item-example3" data-slide-to="10"></li>
						<li data-target="#multi-item-example3" data-slide-to="11"></li>
						<li data-target="#multi-item-example3" data-slide-to="12"></li>
						<li data-target="#multi-item-example3" data-slide-to="13"></li>
					</ol> -->
				<!--/.Indicators-->

				<!--Slides-->
				<!-- <div class="carousel-inner" role="listbox"> -->

				<!--First slide-->
				<!-- <div class="carousel-item active">
							<div class="row">
								<div class="col-md-12 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony1.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-12 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony2.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony3.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony4.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony5.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony6.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony7.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony8.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony9.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony10.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony11.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony12.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony13.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-10 mx-auto">
									<img class="img-fluid ceremony" src="images/highlights/ceremony14.jpg" alt="Card image cap">
								</div>
							</div>
						</div>
					</div> -->
				<!--/.Slides-->
				<!-- </div> -->
				<!--/.Carousel Wrapper-->
				<iframe width="100%" height="515" src="https://www.youtube.com/embed/oNDhzyHpoL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding-top:20px;padding-bottom:20px;"></iframe>
			</div>
	</section>

	<section class="section">
		<div class="container">
			<!-- <h2 class="text-center mb-5 test1">2022 - Testimonials</h2> -->
			<div class="row my-5">
				<div class="col-md-6">
					<div class="activity">
						<h3 class="section-title">Youth 20</h3>
						<p>Youth 20 (Y20) is an official consultation forum for youth from all G20 member countries to be able to dialogue with each other. Y20 encourages youth as future leaders to raise awareness of global issues, exchange ideas, argue, negotiate, and reach consensus. Under this umbrella ForNotFor Debate is proud to collaborate with Youth 20 to align the debate with the G20 agenda of this year.</p>
					</div>
				</div>
				<div class=" my-5 col-md-6"><img src="images/youth20.jpg" class="img-fluid"><br><br></div>
			</div>
		</div>
	</section>
	<!-- The Modal -->
	<div class="modal" id="FNFTestimonials2022-1">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Winner</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/7jx2D8_9cUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="FNFTestimonials2022-2">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">1st runner up testimonial</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/Dc-V-690zaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="FNFTestimonials2022-3">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">2nd runner up testimonial</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/3x3Aya_Xx5M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="FNFTestimonials2022-4">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">3rd runner up testimonial</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/tqNn0wAPFAk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="judge1">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Judge Testimonial 1</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/yQyDDly5tik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="judge2">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Judge Testimonial 2</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/xPcp4T2iZzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

			</div>
		</div>
	</div> <!-- The Modal -->
	<!-- The Modal -->
	<div class="modal" id="ratyansh">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Ratyansh Garg, Winner</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<!-- <p>Ratyansh Garg, winner, from Jayshree Periwal School said, ‘The format of the debate is very unusual and impressive; it not only required us to conduct research but also allowed us to think critically and improve our public speaking skills. The topics for the debate were not typical of debates.’ </p> -->

					<iframe width="100%" height="315" src="https://www.youtube.com/embed/k06kckxiYDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

			</div>
		</div>
	</div> <!-- The Modal -->
	<div class="modal" id="fiona">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Fiona Raj, Runner-Up,</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<!-- <p>Fiona Raj, runner-up, from Shri Shikshayatan School said, “Not only did this platform give the youth a voice, but it also allowed us to present our voices in a way that was acceptable to the rest of the world. The judges' opinions and pointers allowed us to learn our strengths and weaknesses, which will help us for the rest of our lives. Debate competitions such as ForNotFor allow us to apply our knowledge and skills in real life.” </p> -->
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/_89Yuf9NEgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

			</div>
		</div>
	</div>
	<div class="col-md-12 col-sm-12  "></div>
	<!-- footer -->
	<?php include_once "footer.php"; ?>
	<script>
		$(document).ready(function() {
			$("a.scrollLink").click(function(event) {
				event.preventDefault();
				$("html, body").animate({
					scrollTop: $($(this).attr("href")).offset().top
				}, 500);
			});
		});
		new WOW().init();

		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 200) {
				$(".navbar").addClass("fixed-top");
			} else {
				$(".navbar").removeClass("fixed-top");
			}
		});
		$(window).scroll(function() {
			if ($(this).scrollTop() > 200) {
				$('.scroll').fadeIn();
			} else {
				$('.scroll').fadeOut();
			}
		});
		$('#scroll').click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	</script>
	<!-- /footer -->
	<!-- jQuery -->
	<script src="plugins/jQuery/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- slick slider -->
	<script src="plugins/slick/slick.min.js"></script>
	<!-- aos -->
	<script src="plugins/aos/aos.js"></script>
	<!-- venobox popup -->
	<script src="plugins/venobox/venobox.min.js"></script>
	<!-- filter -->
	<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
	<!-- google map -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->
	<!-- <script src="plugins/google-map/gmap.js"></script> -->
	<!-- Main Script -->
	<script src="js/script.js"></script>
	<script src="js/counter.js"></script>
</body>

</html>