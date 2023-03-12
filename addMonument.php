<?php
include 'upload.php';
include('adminHeader.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Monuments</title>
 <!-- Favicons -->
 <link href="assets/img/favicon1.png" rel="icon" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
<link rel="stylesheet" href="assets/css/addM.css">
<!------ Include the above in your HEAD tag ---------->
<!-- Favicons -->
<link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
</head>

<body>

<section class="get-in-touch" data-aos="fade-up" data-aos-delay="100">
<center><h1 style="padding:30px; color:#3194db;" >Add Monuments</h1></center>
   <form class="contact-form row" action="" method="post" enctype="multipart/form-data">
      <div class="form-field col-lg-6">
         <input name="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name of the Monument</label>
      </div>
       
      <div class="form-field col-lg-6 ">
         <input name="time" class="input-text js-input" type="text" required>
         <label class="label" for="company">Time </label>
      </div>
       <div class="form-field col-lg-6 ">
         <input name="price" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Price of Ticket</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="location" class="input-text js-input" type="text" required>
         <label class="label" for="company">Location </label>
      </div>
       
      <div class="form-field col-lg-6 ">
         <input name="style" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Architectural Style</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="fact" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Important Fact</label>
      </div>
      <div class="form-field col-lg-12">
         
         <input name="map" class="input-text js-input" type="url"  required>
         <label class="label" for="message">URL of Map</label>
      </div>
      <div class="form-field col-lg-12">
         
         <input name="360" class="input-text js-input" type="url"  required>
         <label class="label" for="message">URL of 360</label>
      </div>
      <div class="form-field col-lg-12">
         
         <input name="details" class="input-text js-input" type="text"  required>
         <label class="label" for="message">Details of the Monument</label>
      </div>
      
      <div class="form-field col-lg-12">
         
      <div class="form-field col-lg-13">
         
          <label>Upload Images</label>
         <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg"  name="image" required/>
          <br><br>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit" name="submit">
      </div>
       
   </form>
</section>

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