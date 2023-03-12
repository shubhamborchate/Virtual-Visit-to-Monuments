<?php
// $mystr = file_get_contents('stripeC.php',true);
// $qn = $_POST['quantity'] ;
session_start();
// require "stripeC.php";
$a=$_SESSION['price']*100;
$b=$_SESSION['qauntity'];
require './vendor/autoload.php';
header('Content-Type', 'application/json');

$stripe = new Stripe\StripeClient("sk_test_51LQkYCSJ12gjUqvuCyUTaCxXUExpPiPdJDT5BeQD56lRDdq6lkzmLarcVdK5kyfL5UkLOuL3TAKHjCqUGi3pFMDL00YyAfv1Xb");
$session = $stripe->checkout->sessions->create([
    "success_url" => "http://localhost/OnePage/success.html",
    "cancel_url" => "http://localhost/OnePage/stripeMain.html",
    "payment_method_types" => ['card'],
    "mode" => 'payment',
    "line_items" => [
        [
           "price_data" =>[
               "currency" =>"inr",
               "product_data" =>[
                   "name"=> "Monument Ticket",
                   "description" => " "
               ],
               "unit_amount" => $a
           ],
           "quantity" => $b
        ],

    ]
]);

echo json_encode($session);
// // Database configuration  
// $dbHost     = "localhost";  
// $dbUsername = "root";  
// $dbPassword = "";  
// $dbName     = "trip";  
// // Create database connection  
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
// $sql = "SELECT * FROM booking ORDER BY b_id DESC LIMIT 1"; 
// $result = $db->query($sql);
// if($result->num_rows >    0) { 
//     while($row = $result->fetch_assoc()) {
//         echo $row["b_id"];
//         $mid=$row["m_id"];
//         $qua=$row["quantity"];
//         // $_SESSION['stripeQuantity']=$qua;
//         $price=$row["price"];
//         // $_SESSION['stripePrice']=$price;
//     }
// }
?>