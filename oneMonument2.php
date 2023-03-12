<?php
session_start();
//include header
include('header.html');
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
//$sql = "SELECT * FROM add_monuments where id=30"; $result = $db->query($sql);

$sql="select * from add_monuments where m_id='".$_GET['m_id']."'";

$result = $db->query($sql);
 
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

    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
     
    <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { ?>
      
      <!-- ======= About Video Section ======= -->
      <section id="about-video" class="about-video">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-6 video-box align-self-baseline"
              data-aos="fade-right"
              data-aos-delay="100"
            >
            <img style="height: 25pc; width: 36pc;" src="data:image/jpg; charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
               
            </div>

            <div
              class="col-lg-6 pt-3 pt-lg-0 content"
              data-aos="fade-left"
              data-aos-delay="100"
            >
              <h3>
              <?php echo $row["name"]; ?>
              </h3>
              <p class="fst-italic">
                Location : <?php echo $row["location"]; ?>
              </p>
              <ul>
                 
                <li>
                  <i class="bx bx-check-double"></i>Important Fact :  <?php echo $row["fact"]; ?>
                </li>
                <li>
                  <i class="bx bx-check-double"></i>Architectural Style : <?php echo $row["style"]; ?>
                </li>
                <li>
                  <i class="bx bx-check-double"></i>Timing : <?php echo $row["time"]; ?>
                </li>
                 
                <li>
                  <i class="bx bx-check-double"></i>Ticket Price : <?php echo $row["price"]; ?>
                </li>
                 
              </ul>
              <p>
                Details : <br>&nbsp;&nbsp;<?php echo $row["details"]; ?> 
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Video Section -->
      
    </main>
    <!-- End #main -->
        
    <section id="hero" class="d-flex align-items-center">
    <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
      <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Online Ticket Booking</h1>
            <h2>Know you can book your ticket online , <br> just click on the button below .</h2>
            <table class="center" style="margin-left: auto;
  margin-right: auto;">
  <tr>
    <th>Price</th>
    <th>Number of Tickets</th>
  </tr>
  <form action=" " method="post">
  <tr>
    <td><?php echo $row['price']; ?></td>
    <td><input type="number" min="1" max="10" value="1" id="number" name="number" onchange="incre()"></td>
    <td><input type="text" name="nn" id="nn" value="<?php echo $row['price'];?>"> </td>
  </tr>
  <script>
      function incre() {
      var a = document.getElementById("number").value;
      //session of js
      localStorage.setItem('jsquantity',a);
			var p=<?php echo $row['price'];?>;
			var total=a*p;
      //session of js
      localStorage.setItem('jstotal',total);
			console.log(total);
			document.getElementById("nn").setAttribute('value',total);
      return {total,a};
     }
     var c = incre();
     var total = c.total;
     var a = c.a;

     </script>
    <?php //$total1 = "<script>document.writeln(total);</script>";
          //$_SESSION['total']=$total1;
          //$aa = "<script>document.writeln(a);</script>";
          //$_SESSION['quantity']=$aa;
    ?>
  </form>
</table>

          </div>
        </div>
        <br>
      <div class="text-center">
      <?php// echo $_SESSION['total'];
      //echo $_SESSION['quantity'];
      // echo $_SESSION['number']
       ?>
      <a href="checkLogin.php?monument=<?php echo $_GET['m_id'] ?> & price=<?php echo $row['price'];?>" class="btn-get-started scrollto">Book your Ticket</a>
        </div>
      </div>
    </section>  
    <iframe
              src="<?php echo $row['360']; ?>"
              width="100%"
              height="600px"
              style="padding: 35px;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
      <br>

    <iframe
              src="<?php echo $row['map']; ?>"
              width="100%"
              height="300px"
              style="padding: 35px;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
      
    <?php } ?> 
    <?php }else{ ?>
    <p class="status error">Image(s) not found...</p>
    <?php } ?>
     
    
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

 
