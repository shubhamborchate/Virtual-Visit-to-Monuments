<?php
session_start();
//include header
include('header.html');
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
$sql = "SELECT * FROM booking ORDER BY b_id DESC LIMIT 1"; 
$result = $db->query($sql);
if($result->num_rows >    0) { 
    while($row = $result->fetch_assoc()) {
        $mid=$row["m_id"];
        $qua=$row["quantity"];
        $_SESSION['qauntity']=(int)$qua;
        $price=$row["price"];
        $_SESSION['price']=$price;
        $date=$row["b_date"];
        $total=$row["total"]; 
    }
} 

//  echo" <script>localStorage.setItem('firstname', 'Smith');</script>  ";

$sql1="select name from add_monuments where m_id='".$mid."'";  
      $result1 = $db->query($sql1);
      if($result1->num_rows > 0) { 
          while($row1 = $result1->fetch_assoc()) { 
            $mName=$row1["name"];
            $_SESSION['mName']=$mName;
          }
        }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Confirm Booking</title>
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
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <style>
    td,th {
    text-align: center;
    padding: 15px;
    }
  </style>
     
  </head>

  <body>
   
    <section id="hero" class="d-flex align-items-center">
    <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
      <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Confirm Ticket</h1>
              <br><br>
  <table class="center" style="margin-left: auto; margin-right: auto; padding: 150px;width: 100%;">
  
  <tr>
    <th>Name of Monument</th>
    <th>Price  &nbsp;&nbsp;&nbsp;</th>
    <th>No of Tickets </th>
    <th>Total Price</th>
    <th>Date </th>
  </tr>
  <form action="" method="POST">
  <tr>
    <td><?php echo $mName; ?></td>
    <td><?php echo $price; ?></td>
    <td><?php echo $qua; ?></td>
    <td><?php echo $total; ?></td>
    <td><?php echo $date; ?></td> 
  </tr>
   
  <tr>
    <td></td>
      <td> 
      <!-- <button id="btn" type="submit" value="Confirm Your Ticket" name="submit" class="btn-get-started scrollto"></button> -->
      <!-- <input id="btn" type="submit" value="Confirm Your Ticket" name="submit" class="btn-get-started scrollto" >
      <script src="http://js.stripe.com/v3/"></script>
      <script src="stripeScript.js"></script> -->
      </td>
  </tr>
  
  </form>
  
</table>
  
          </div>
        </div>
        <br>
        <center>
        <button id="btn" class="btn-get-started scrollto">Confirm Your Ticket</button>
        <script src="http://js.stripe.com/v3/"></script>
        <script src="stripeScript.js"></script>
        </center>
      </div>

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

 
