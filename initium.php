<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>For not for - INITIUM</title>

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
		<!-- Main Stylesheet -->
		<link href="css/lightslider.css" rel="stylesheet">
		<link href="css/linearicons.css" rel="stylesheet">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/line-icons.css">
		<!-- <link href="css/lightslider.css" rel="stylesheet"> -->
		<!--Favicon-->
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="icon" href="images/favicon.png" type="image/x-icon"> 

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/debate.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
 
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.php"><img src="images/fornotfor1.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
							<ul class="navbar-nav ml-auto text-center">
								<li class="nav-item active"> <a class="nav-link" href="index.php">FNF 2022</a> </li>
								<li class="nav-item @about "> <a class="nav-link" href="leadership-retreat.php">Leadership Retreat</a> </li>
								<li class="nav-item"> <a class="nav-link" href="fnf-2021.php">FNF 2021</a> </li>
								<li class="nav-item @@brochure  dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relevant Documents</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a target="_blank" class="dropdown-item" href="downloads/fornotfor-brochure-2022.pdf">Brochure</a>
										<div class="dropdown-divider"></div> <a class="dropdown-item" href="rule-book.php">Rule book </a>
										<div class="dropdown-divider"></div>  <a class="dropdown-item" href="demo-video.php">Demo video</a> </div>
								</li>
							</ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Initium</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- Initium -->
<!--<section class="section pb-0">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        
	<!--	<ul class="objectives">
         <li>Initium consisted of fun activities, and it consisted of games such as Motion Contest, Caption Contest, and Meme Contest. For the Motion and Caption Contest, participants were provided with a few lines of context and visual aids and participants were required to come up with the Debate Motions, and captions based on the released themes. This helped improve their articulation and encouraged parallel thinking. For the Meme Contest, a list of topics/themes was shared on the WhatsApp group and Social Media channels from which the participants were encouraged to come up with the most creative/funny memes using any template as they pleased. This encouraged active involvement and helped us understand each other better.</li>
         <li>As a part of our programme, we also had a Live Game Session. We planned a Games and Interaction Session which was held virtually on Zoom. Multiple games were played, and the session turned out to be a fun learning experience for the participants. The games that were played were Lawyer up, Shipwreck and Block and tackle, all of them being games that require logical thinking and spontaneity which helped them for the Debate Competition. We accommodated everyone’s interests and ensured that the gathering was fruitful for all.</li>
         <li>The outcome of <i>Initium</i> was rather unexpected. The feedback was overwhelmingly positive, and the participants were looking forward to more such interactions. The programme impacted the participants greatly as they got exciting prizes and certificates at the end of it. It also helped them to turn the competitive environment in a positive light as the participants got to bond with one another through <i>Initium</i> making the whole competition a healthy one. </li>
         <li>Now, what does 2022 have in store for us? <i>Initium</i> 2022 is going to be bigger and better as we have a lot more exciting activities and workshops lined up for you.  We aim at expanding not only the number of activities conducted but also bring in a plethora of other interesting events that would help in bringing out the excitement and also break the ice among participants. Initium 2022 may not require the hard-driven competitive spirit such as For Not For, but it certainly calls for its own unique sportsmanship and cadre which excites one from within.</li>      
        </ul> -->
     <!-- </div>
     
	  <!-- <div class="col-md-4"><img src="images/initium1.jpg" class="img-fluid bounceOut"></div>
	  <div class="col-md-4"><img src="images/initium2.jpg" class="img-fluid bounceOut"></div>
	  <div class="col-md-4"><img src="images/initium3.jpg" class="img-fluid bounceOut"></div>
	  <!-- <div class="col-md-2 mt-5"></div> -->
	
	  <!-- <div class="col-md-2 mt-5"></div> -->
  <!--  </div>
  </div>
</section>  -->
<!-- /Initium -->
<section class="calendar">
     <div class="container-fluid">
	      
	     <div class="row">
		     <div class="col-12">
			 <h2 class="section-title">Initium</h2>
        <p> Initium is a series of activities and events which precede the main rounds of the For Not For International Debate competition 2022. It had its inaugural version in the year of 2021 and from the very first day it was memorable for being interesting as well as being an event conducted in no other debate competition.</p>
		<p>This year is no different with a highly decorated lineup of experts in the field of debating, ready to induce not only the various technical aspects of parliamentary debates but also in invoking that exciting competitive spirit among the students. Participants being at a nascent stage in debating will receive vital advice in how to conduct themselves as well as making arguments in sessions. All this, aiding in making the competition even more competitive and interesting. Initium 2022 is bigger and will surely help in warming up for the main event!</p>
	    <h2 class="section-title mt-5">Calendar of Activities – Initium 2022</h2>
		<div class="row">
		<div class="col-md-6">
		    <div class="calendar-one">
			     <img class="img-fluid w-100" src="images/fnf-calendar.png">
			</div>
		</div>
		<div class="col-md-6">  
		<div class="row">
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/tarun-poster.png"></div></div>
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/game-poster.png"></div></div>
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/rahul-poster.png"></div></div>
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/afreen-poster.png"></div></div>
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/meme-motion.png"></div></div>
			<div class="col-md-6"><div class="poster"><img class="img-fluid w-100" src="images/vignesh-poster.png"></div></div>
		</div>  
		</div>
	</div>
	</div>
	
	<div class="col-12"> 
			<h2 class="section-title mt-5">FOR NOT FOR 2021 - Participants Speak</h2>
			<iframe width="100%" height="515" src="video/initium.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
		 </div>
	 </div>
</section>



<!-- footer -->
<footer>
  <!-- newsletter -->
  <!-- <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
       <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
							<!-- logo -->
							<a class="logo-footer" href="index.php"><img class="img-fluid mb-4" src="images/fornotfor1.png" alt="logo"></a>
							<ul class="list-unstyled">
								<li class="mb-2" style="color:#f9a12f;">IFIM College, 8 P & 9 P, KIADB Industrial Area, Electronic City Phase 1, Electronic City, Bengaluru, Karnataka - 560100</li>
							</ul>
						</div>
						<div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
							<h4 class="text-white mb-5">Quick Links</h4>
							<ul class="list-unstyled">
								<li class="mb-3"><a class="text-color" href="index.php">FNF 2022</a></li>
								<li class="mb-3"><a class="text-color" href="leadership-retreat.php">LEADERSHIP RETREAT</a></li>
								<li class="mb-3"><a class="text-color" href="fnf-2021.php">FNF 2021</a></li>
							</ul>
						</div>
						<!-- links -->
						<div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <h4 class="text-white mb-5">RELEVANT DOCUMENTS</h4>
          <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="downloads/fornotfor-brochure-2022.pdf" target="_blank">Brochure</a></li>
            <li class="mb-3"><a class="text-color" href="rule-book.php">Rule Book</a></li>
            <li class="mb-3"><a class="text-color" href="demo-video.php">Demo Video</a></li>
          </ul>
        </div> 
        <!-- links -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.php">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="event.php">Events</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.php">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.php">FAQs</a></li>
          </ul>
        </div> -->
        <!-- support -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
          </ul>
        </div> -->
        <!-- support -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
  <!-- copyright -->
  <!-- <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © themefisher</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
</footer>

<script>
$(document).ready(function(){
  $( "a.scrollLink" ).click(function( event ) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
  });
});


new WOW().init();
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >=200) {
      $(".navbar").addClass("fixed-top");
    }
    else{
      $(".navbar").removeClass("fixed-top");
    }
  });
$(window).scroll(function(){ 
if ($(this).scrollTop() > 200) { 
   $('.scroll').fadeIn(); 
} else { 
  $('.scroll').fadeOut(); 
} 
});
$('#scroll').click(function(){ 
$("html, body").animate({ scrollTop: 0 }, 600); 
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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script> -->

<!-- Main Script -->
		<script src="js/script.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/lightslider.js"></script>

</body>
</html>