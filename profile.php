<?php
session_start();
  
if(isset($_SESSION['user']))
{
    $_SESSION['start'] = time(); // Taking now logged in time.
    // Ending a session in 30 minutes from the starting time.
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
    header('location:logOut.php');
}
else
{
    header('location:login.php');
}
?>