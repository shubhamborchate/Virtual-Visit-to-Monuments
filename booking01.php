<?php 
session_start();
if(isset($_SESSION['user']))
{
    echo $_SESSION['user']; 
    echo $_SESSION['monument'];
    echo"<script>
    document.write(localStorage.getItem('jstotal')); 
    document.write(localStorage.getItem('jsquantity'));
    </script>";
}
else
{
    header('location:login.php');
}
 
 
include "dbConfig.php";

  if (isset($_SESSION['user'])) {

    $user = $_SESSION['user'];
    $price = $_SESSION['price'];
    $monumentId = $_SESSION['monument'];

    $tp="Rs ";
    $t1 = "<script>document.write(localStorage.getItem('jstotal'));</script>";
    $total=$tp.$t1;
    echo $total;
    $q1 = "<script>document.write(localStorage.getItem('jsquantity'));</script>";
    $quantity=$q1;
    // $total=45; $quantity=3;

    $insert = $db->query("INSERT INTO `booking`(`m_id`, `quantity`, `price`, `total`, `email`) VALUES ('$monumentId','$quantity','$price','$total','$user')");

     

    if($insert){ 

      echo "New record created successfully.";

    }else{

      echo "Error:";

    } 

    $db->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>