<!DOCTYPE html>

<?php
require_once("db_connection.php");
session_start();
if(isset($_SESSION['login_sess'])) { ?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Successor Computer Academy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><img src="assets/img/logotrans.png"/><a href="index.php">Successor Computer Academy</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php">About</a></li>
                    <li><a class="nav-link scrollto" href="results.php">Results</a></li>
                    <li><a class="getstarted scrollto" href="destroy.php">Sign Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Welcome <?php echo $_SESSION['user_name']?></h2>
            </div>
            <div class="row mt-5">
                <!--Content-->
            </div>
            <div class="container d-flex justify-content-center ">
                
                <form class="border shadow p-3 rounded" action="insertdata.php" method="post">
                <?php if (isset($_GET['saved'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_GET['saved']?>
                    </div>
    
                    <?php } ?>
                <h4>Enter the student infromation.</h4>
                    <div class="form-group">
                        <label for="inputRollno">Roll No</label>
                        <input type="text" class="form-control" name="inputRollno" id="inputRollno" placeholder="Enter Roll No">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputStName">Student Name</label>
                        <input type="text" class="form-control" id="inputStName" name="inputStName"
                            placeholder="Student Name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputFatherName">Father Name</label>
                        <input type="text" class="form-control" id="inputFatherName" name="inputFatherName"
                            placeholder="Enter Father Name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputDuration">Duration</label>
                        <input type="text" class="form-control" name="inputDuration" id="inputDuration" placeholder="Enter Duration">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputDate">Dated</label>
                        <input type="text" class="form-control" name="inputDate" id="inputDate" placeholder="Enter Date">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputProgram">Program</label>
                        <input type="text" class="form-control" name="inputProgram" id="inputProgram" placeholder="Enter Program">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputTotalMarks">Total Marks</label>
                        <input type="text" class="form-control" name="inputTotalMarks" id="inputTotalMarks" placeholder="Enter Total Marks">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputObtainedMarks">Obtained Marks</label>
                        <input type="text" class="form-control" id="inputObtainedMarks" name="inputObtainedMarks" placeholder="Enter Obtained Marks">

                    </div>
                    <br>
                    <button type="submit" name="insertBtn" class="btn btn-primary">Save Data</button>
                </form>

            </div>


        </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- End #main -->

   <!-- ======= Footer ======= -->
  

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Successor Computer Academy </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://ultimabyte.com/">UltimaByte</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php }else{
	header("Location: signInFourm.php");
} ?>