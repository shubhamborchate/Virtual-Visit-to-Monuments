<?php
session_start();
require_once 'dbConfig.php';
$sql = "SELECT * FROM booking ORDER BY b_id DESC LIMIT 1"; 
$result = $db->query($sql);
if($result->num_rows >    0) { 
    while($row = $result->fetch_assoc()) {
        echo $row["b_id"];
        $mid=$row["m_id"];
        $qua=$row["quantity"];
        // $_SESSION['stripeQuantity']=$qua;
        $price=$row["price"];
        // $_SESSION['stripePrice']=$price;
    }
}
$sql1="select name from add_monuments where m_id='".$mid."'";  
      $result1 = $db->query($sql1);
      if($result1->num_rows > 0) { 
          while($row1 = $result1->fetch_assoc()) { 
            $mName=$row1["name"];
            $_SESSION['mName']=$mName;
          }
        }
?>