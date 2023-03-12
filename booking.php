<?php
session_start();
//include header
include('header.html');
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database

$sql="select * from add_monuments where m_id='".$_SESSION['monument']."'";
// $sql="select * from add_monuments where m_id=30";
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

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

     
  </head>

  <body>
  <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { ?>
    <section id="hero" class="d-flex align-items-center">
    <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
      <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Online Ticket Booking</h1>
            <h2>Know you can book your ticket online , <br> just click on the button below .</h2> <br><br>
  <table class="center" style="margin-left: auto; margin-right: auto; padding: 25px;width: 60%;">
  <tr>
    <th>Price  &nbsp;&nbsp;&nbsp;</th>
    <th>No of Tickets </th>
    <th>Total Price</th>
    <th>Select Date </th>
  </tr>
  <form action="" method="POST">
  <tr>
    <td style="padding :50px"><?php echo $row['price']; ?></td>
    <td><input type="number" min="1" max="10" value="1" id="quantity" name="quantity" onchange="sum()" style="border: none;
  border-bottom: 2px solid blue; width: 50px;"></td>
    <td><input type="text" name="result" id="result" value="<?php echo $row['price'];?>" style="border: none;
  border-bottom: 2px solid blue; width: 50px;"> </td> 
    <td><input id='myDate' type="date" name="date" min="2022-08-04" required/></td>
    <!-- <script> document.getElementById("myDate").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate()</script> -->
  </tr>
  <tr></tr>
  <tr>
    <td></td>
    <td></td>
      <td> 
      <input type="submit" value="Book Your Ticket" name="submit" class="btn-get-started scrollto" >
      </td>
  </tr>
  
  </form>
</table>

<script>
    function sum() {
        var quantity = parseInt(document.getElementById('quantity').value);
        var price = parseInt(<?php echo $row['price'];?>);
        var total = price * quantity;
        document.getElementById('result').innerHTML=total;
        document.getElementById('result').value=total;
    }
</script>
    
          </div>
        </div>
        <br>
      <div class="text-center">

       <?php 
         
          if (isset($_POST["submit"])) {
            $total = $_POST['result']; 
            $user = $_SESSION['user'];
            $price = $row['price'];
            $monumentId = $_SESSION['monument'];
            $quantity=$_POST['quantity'] ;
           
            $newDate = date("Y-m-d", strtotime($_POST['date'] ));
            
            // echo "inside";
            // echo '<script type="text/javascript">
            //           window.location.href="http://localhost:8080/stripeMain.php";
            //        </script>';
            $insert = $db->query("INSERT INTO `booking`(`m_id`, `quantity`, `price`, `total`, `email`,`b_date`) VALUES ('$monumentId','$quantity','$price','$total','$user','$newDate')");
        
            if($insert){ 
              
              echo '<script type="text/javascript">
               window.location.href="http://localhost:8080/stripeMain.php";
               </script>';

            }else{
        
              echo "Error:";
        
            } 
        
            $db->close(); 
        
          } 
        
    ?>
        
       
        </div>
      </div>
      
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

 
