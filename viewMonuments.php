<?php
include('adminHeader.html');
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
$sql = "SELECT * FROM add_monuments ORDER BY m_id"; 
$result = $db->query($sql);
?>

<!DOCTYPE html> 
<html lang="en-US">

<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<title>View Monuments</title>
<meta charset="utf-8">

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
  <link href="assets/css/viewButton.css" rel="stylesheet">
</head> 
<body>
<div class="container" data-aos="fade-up" data-aos-delay="100">
 <br><br><br><br>
<center><h1 style="padding:30px; color:#3194db;"data-aos="fade-up"
        data-aos-delay="100">List of Monuments</h1></center>
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
                  <i class="bx bx-check-double"></i>When data is inserted :  <?php echo $row["created"]; ?>
                </li>
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
              <br><br>
              
              </div>
          </div> 
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateMonument.php?id=<?php echo $row['m_id']; ?>"><button class="button-29" role="button">Edit</button></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="deleteMonument.php?id=<?php echo $row['m_id']; ?>"><button class="button-42" role="button">Delete</button></a>
      </section>
      <!-- End About Video Section -->
<?php } ?> 


<?php }else{ ?>

<p class="status error">Image(s) not found...</p>

<?php } ?> 
</div>


</div>

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