<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FNF 2022</title>

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
  <!-- header -->
  <?php include_once "header.php"; ?>
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
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">FNF 2022</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <!-- about -->
  <section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title">FNF 2022</h2>
          <p>We had 230 students from 10 countries and 162 schools with prestigious international schools including Delhi Private School, Dubai, Dhaka, and Doha; Singapore Intercultural School, Indonesia; and St. Josephs Abu Dhabi.</p>

          <p>75 eminent judges including Lawyers, Debate Winners, Principals, Professors, Toastmasters followed defined judging parameters and gave individual feedback to each participant. Mr. Pradeep Gooptu, Founder of the Calcutta Debating Circle and Ex-Editor of Business Standard, and Ms. Priyanka Srivastava, Senior Editor, Education Times were the judges of the Final Rounds.</p>

          <p>Topics ranged from paternity leave to the commercialization of surrogacy, the glorification of martyrdom, and whether the WTO should grant a Patent Waiver for Covid -19 Vaccines. </p>

        </div>
        <div class="col-md-4"><iframe width="100%" height="315" src="https://www.youtube.com/embed/jVdxxIGhmu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="col-md-4"><iframe width="100%" height="315" src="https://www.youtube.com/embed/Pgz3V6K-RPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="col-md-4"><iframe width="100%" height="315" src="https://www.youtube.com/embed/DKpXGNWK3AM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

      </div>
    </div>
  </section>
  <!-- /about -->
  <!-- Highlights -->
  <section class="fnp22 bg-gray">
    <h2 class="text-center">Milestones of FNF 2022</h2>
    <div class="container mt-5 mb-0">
      <div class="row text-center">
        <div class="col">
          <div class="counter1"> <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
            <h2 class="timer count-title1 count-number" data-to="230" data-speed="7000">₹</h2>
            <p class="count-text ">Students</p>
          </div>
        </div>
        <div class="col">
          <div class="counter1"> <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
            <h2 class="timer count-title1 count-number" data-to="10" data-speed="7000"></h2>
            <p class="count-text ">Countries</p>
          </div>
        </div>
        <div class="col">
          <div class="counter1"> <i class="fa fa-university fa-5x" aria-hidden="true"></i>
            <h2 class="timer count-title1 count-number" data-to="162" data-speed="7000"></h2>
            <p class="count-text ">Schools</p>
          </div>
        </div>
        <div class="col">
          <div class="counter1"> <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i>
            <h2 class="timer count-title1 count-number" data-to="230" data-speed="7000"></h2>
            <p class="count-text ">Happy Participants</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Highlights -->

  <!-- /footer -->
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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script> -->

  <!-- Main Script -->
  <script src="js/script.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/lightslider.js"></script>

</body>

</html>