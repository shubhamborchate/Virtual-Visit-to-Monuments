<?php
session_start();
 
$_SESSION['monument']=$_GET['monument'];
// $_SESSION['price']=$_GET['price'];
 
if(isset($_SESSION['user']))
{
    $_SESSION['start'] = time(); // Taking now logged in time.
    // Ending a session in 30 minutes from the starting time.
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
    header('location:booking.php');
}
else
{
    header('location:login.php');
}
?>