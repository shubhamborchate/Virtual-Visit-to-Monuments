<?php
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
$sql = "SELECT * FROM add_monuments ORDER BY id DESC"; $result = $db->query($sql);
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Of Monuments</title>
  <link href="assets/img/favicon1.png" rel="icon">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 </head>
 <body>
  <h1 style="text-align:center ;">List of Monuments</h1>
     
    <div class="container">
       
      <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { ?>
      <div class="row">
        <div class="col-8">
        <a href="adminDash.html"><?php echo $row["name"]; ?></a>
        </div>
        <div class="col-4">
        <img style="height: 18pc; width: 32pc;" src="data:image/jpg; charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
        </div>
      </div>
      <?php } ?> 


<?php }else{ ?>

<p class="status error">Image(s) not found...</p>

<?php } ?> 
    </div>
     
 
    
 </body>
 </html>
    