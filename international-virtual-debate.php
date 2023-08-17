<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>For not for - The International Virtual Debate</title>

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
								<li class="nav-item"> <a class="nav-link" href="index.php">FNF 2022</a> </li>
								<li class="nav-item @about  active"> <a class="nav-link" href="leadership-retreat.php">Leadership Retreat</a> </li>
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Virtual International Debate</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- Virtual International Debate -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h2 class="section-title">Virtual International Debate</h2>
         <p>To cater to the interests of debate enthusiasts from across the globe we bring to you, FNF 2022 - “Virtual International Debate”. This model is purely for our international audience i.e. students from schools situated outside India. To allow for international students to freely express their views on contemporary topics, FNF 2022 will continue with an independent model where all rounds will be conducted virtually.  </p>
         <ul class="objectives pt-0">
           <li>The format of the virtual debate will be 1v1 (Lincoln- Douglas Format).</li>
           <li>Students of Standard 11 or 12 from only outside India can participate.</li>
           <li>From each school, two students can register. Each entry will be considered a separate registration.</li>
           <li>Registration can be done by the Student or the School authority.</li>
           <li>Only students from schools outside India can register </li>      
         </ul>
      </div>
    </div>
  </div>
</section>
<!-- /Virtual International Debate -->

<!-- Schedule Section Start -->
<section id="schedules" class="schedule section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Rounds and Schedule</h1>
          <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p> -->
        </div>
      </div>
    </div>
    <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
      <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
        <div class="table-responsive">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                <div class="item-text">
                  <h4>Saturday</h4>
                  <h5>3rd September, 2022</h5>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                <div class="item-text">
                  <h4>Wednesday</h4>
                  <h5>7th September, 2022</h5>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                <div class="item-text">
                  <h4>Saturday</h4>
                  <h5>10th September, 2022</h5>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                <div class="item-text">
                  <h4>Sunday</h4>
                  <h5>11th September, 2022</h5>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
            <div id="accordion">
              <div class="card">
                <div id="headingOne">
                  <div id="saturday" class="collapsed card-header"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     <h3>Preliminary Zonal Round</h3>
                   </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                   <div id="saturday" class="card-body" >
                       <ul>
                         <li><span>	<i class="fa fa-star" style="color:#3d426b;"></i></span>16 participants to be shortlisted after one-on-one rounds for all registered
</li>
                       </ul>
                  
<!-- <p>India North, India South, India East, India West, International (5 rounds)</p>
<i class="fa fa-hand-o-right"></i><p> 16 will be shortlisted (8 from International and 8 from the Indian zones)</p> -->
                   
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
            <div id="accordion2">
              <div class="card">
                <div id="headingOne1">
                  <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                   
                    <h3>Quarter Final Round</h3>
                  
                  </div>
                </div>
                <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
                  <div id="tuesday" class="card-body">
                    
                    <ul>
                      <li><span>	<i class="fa fa-star"></i></span>Total 8 rounds; 8 Winners
</li>
                   </ul>
                    
                     
                    
                  </div>
                </div>
              </div>
            

            </div>
          </div>
          <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
            <div id="accordion3">
              <div class="card">
                <div id="headingOne3">
                  <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                        
                    <h3>Semi Final Round</h3>
                  </div>
                </div>
                <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                  <div id="friday" class="card-body">
                
                  <ul>
                      <li><span>	<i class="fa fa-star"></i></span>Total 4 rounds; 2 Winners, 2 Runners Up</li>
                   </ul>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
          <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
            <div id="accordion4">
              <div class="card">
                <div id="headingOne">
                  <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                         
                    
                    <h3>Final Round</h3>
                   
                  </div>
                </div>
                <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                  <div id="sunday" class="card-body">

                    <ul>
                      <li><span>	<i class="fa fa-star"></i></span>First Place & Second Place</li>
                   </ul>
                    
                    
                  </div>
                </div>
              </div>
             
             
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Schedule Section End -->












<!-- description section -->

<section class="py-4 py-lg-5 placements" id="Placements">
     <div class="container">
        <div class="row wow fadeInUp">
           <div class="col-md-12 text-center">
              <h2 class="mb-3 mb-md-4 text-light">Round Format: 22 Mins</h2>
           </div>              
        </div>
       
        <div class="row wow fadeInUp mx-auto">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <div class="table-responsive">
           <table class="table table-bordered transperant">                  
              <tbody>
                <tr>  
                    <td width="75%">
                        Greeting, Introduction by Convener   
                    </td>  
                    <td width="25%">
                       2 min    
                      </td>
                  </tr>
                <tr>  
                    <td>                 
                       Coin Toss and sides chosen
                 </td>     
                 <td>                 
                    2 min 
                 </td>                    
                </tr>
                <tr>   
                    <td>
                      Prep time 
                 </td>
                 <td>
                    2 min 
                 </td>
                 </tr>

                 <tr>     
                  <td>
                   Affirmative constructive speech 
                 </td>
                    <td>
                      4 min
                    </td>
                    </tr>
        <tr>     
                  <td>
                   Negative cross examination
                 </td>
                    <td>
                      2 min
                    </td>
                    </tr>
        <tr>     
                  <td>
                    Negative constructive speech 

                 </td>
                    <td>
                      4 min
                    </td>
                    </tr>
        <tr>     
                  <td>
                    Affirmative cross examination 
                 </td>
                    <td>
                      2 min
                    </td>
                    </tr>
        <tr>     
                  <td>
                    Affirmative rebuttal and summary 
                 </td>
                    <td>
                      2 min
                    </td>
                    </tr>
        <tr>     
                  <td>
                    Negative rebuttal and summary 
                 </td>
                    <td>
                      2 min
                    </td>
                    </tr>
                 <tr>     
                  <td>
                    Judge’s round 
                 </td>
                    <td>
                      2 min
                    </td>
                    </tr>
               </tbody>
            </table><p class="text-white">Judge’s decision will be communicated on the same day as the Round  </p></div>
    </div>
    <div class="col-md-3"></div>
        </div>


     </div>


     
    
  </section>
<!-- end of description section -->


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
<a href="register_closed.php" target="_blank" ><button class="btn scroll" id="scroll" >Register Now </button></a>


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