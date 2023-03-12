<?php
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
$sql = "SELECT * FROM add_monuments ORDER BY m_id DESC"; $result = $db->query($sql);

// visiter count
$name="counter.txt";
$file = fopen($name,"r");
$hits= fscanf($file,"%d");
fclose($file);
$hits[0]++;

$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Virtual Trip</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon1.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="DashBoard.php">Virtual Trip</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="DashBoard.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#hero">Monuments</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li>
              <a class="nav-link scrollto" href="#contact">Contact</a>
            </li>
            <li><a class="getstarted scrollto" href="profile.php">Profile</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Virtual visit to Indian Monuments</h1>
            <h2>Know you can visit monuments online and you can booking tickets too</h2>
          </div>
        </div>
         
         
         
           
          <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
             
            <img src="img/taj mahal.jpg" alt="" srcset="" style="height: 200px; width: 200px;"> <br><br>
            <h4 class="title">
            <a href="oneMonument.php?m_id=30">Taj Mahal</a></h4>
            <p class="description"> </p>
          </div>
        </div>
           
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <img src="img/Agra-Fort.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=31">Agra Fort</a></h4>
            <p class="description"> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <img src="img/Hawa-mahal.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=32">Hawa Mahal</a></h4>
            <p class="description"> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">  
            <img src="img/Jaisalmer-Fort.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=33">Jaisalmer Fort</a></h4>
            <p class="description"> </p>
          </div>
        </div>
         
        </div>
          
        <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">          
            <img src="img/ajanta caves.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=34">Ajanta Caves</a></h4>
            <p class="description"> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <img src="img/AmerFort.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=35">Amer Fort</a></h4>
            <p class="description"> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            
            <img src="img/HumayunsTomb.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="oneMonument.php?m_id=36">Humayun’s Tomb</a></h4>
            <p class="description"> </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
             
            <img src="img/konark sun temple.jpg" alt="" srcset="" style="height: 200px; width: 200px;"><br><br>
            <h4 class="title"><a href="">More</a></h4>
            <p class="description"> </p>
          </div>
        </div>
        </div>    
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Team</h2>
            <p>
              
            </p>
          </div>

          <div class="row">
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="img/client.png"
                    class="img-fluid"
                    alt="" 
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ms. Rupali Bhangale</h4>
                  <span>Project Guide</span>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="img/client.png"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ashutosh Rajeev Varma</h4>
                  <span>Team member</span>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="img/client.png"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a> 
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Shubham Eknath Borchate</h4>
                  <span>Team member</span>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="img/client.png"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a> 
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Prasad Sayaji Auti</h4>
                  <span>Team member</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact US</h2>
            <p>
               
            </p>
          </div>

          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.2634811848275!2d73.77199560000001!3d18.6521689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9e0ffffffff%3A0x1265e81bedabe2f8!2sIICMR%20MCA%20College!5e0!3m2!1sen!2sin!4v1656740034976!5m2!1sen!2sin"
              width="100%"
              height="270px"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div class="row mt-5">
            <div class="col-lg-4">
              <br><br><br>
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>IICMR Nigdi</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@virtualtrip.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 7894561230</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <center><h1>Give your Feedback</h1></center><br>
              <?php require("feedback.php")?>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
       

      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>VirtualTrip</span></strong
            >. All Rights Reserved
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
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
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
