<?php 
    require_once 'dbConfig.php';
    include('adminHeader.html');

    // Include the database configuration file
    require_once 'dbConfig.php';
    // Get image data from database
    $sql="select * from booking";
    
    $result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Trip</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

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

  <style>
    /* typography */

html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
  text-align: center;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
  padding: 15px;
}

tfoot th {
  text-align: right;
}
table {
  width: 100%;
  
}
  </style>
</head>

<body>
<br><br><br><br>
<center><h1 style="padding:30px; color:#3194db;"data-aos="fade-up"
        data-aos-delay="100">Tickets Details</h1></center>
<table data-aos="fade-up" data-aos-delay="100">
   
  <thead>
    <tr>
      <th scope="col">SR. NO</th>
      <th scope="col">Ticket ID</th>
      <th scope="col">Email of Customer</th>
      <th scope="col">Name of Monument</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Visiting Date</th>
    </tr>
  </thead>
  <?php $sr=0; $sr++?>
  <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { 
      $sql1="select name from add_monuments where m_id='".$row['m_id']."'";  
      $result1 = $db->query($sql1);
      if($result1->num_rows > 0) { 
          while($row1 = $result1->fetch_assoc()) { 
    ?>
  <tbody>
    
    <tr>
      <td><?php echo $sr; ?></td>
      <td><?php echo $row['b_id']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row1['name']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['total']; ?></td>
      <td><?php echo $row['b_date']; ?></td>
    </tr>
      <?php $sr++?>
  </tbody>
  <?php 
   
  }} 
  }}  
  else{
    echo "error";
  }?>
   
</table>

   
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