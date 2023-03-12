<!-- Favicons -->
<link href="assets/img/favicon1.png" rel="icon" />
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


<?php
  session_start();
   error_reporting(0);
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      function validData($x)
      {
         $x = trim($x);
         $x = stripslashes($x);
         $x = htmlspecialchars($x);
         return $x;
      }
      $conn = new mysqli("localhost", "root", "", "trip");
      if(!$conn->connect_errno)
      {
         $email = validData($_POST["email"]);
         $pass = validData($_POST["pass"]);
         //$_SESSION['user'] = $stmt['email'];
         if(!empty($email) and !empty($pass))
         {
            
            $sql = "SELECT * FROM customer WHERE email=? and pass=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email, $pass);
            if($stmt->execute())
            {
               $result = $stmt->get_result();
               if($result->num_rows)
               {
                $_SESSION['user'] = $email;
                if(isset($_SESSION['monument']))
                {
                  header('location:booking.php');
                }
                else
                {
                  header('location:DashBoard.php');
                }
                  //header('Location: DashBoard.php');
                  exit();
               }
               else
                  $err = "Wrong Username and/or Password";
            }
            else{
              $err = "Wrong Username and/or Password123";
            }
         }
      }
      $conn->close();
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <div class="container" id="container">
       
      <div class="form-container sign-in-container">
      <FORM name="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>Sign in</h1>

          <span>Use your account</span>
          <input type="email" placeholder="Email" name="email"/>
          <input type="password" placeholder="Password" name="pass"/>
          <!-- <a href="#">Forgot your password?</a> -->
          <button type="submit">Sign In</button>
          <br>
          <?php
          if(isset($err))
           echo $err; 
          ?>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp" onclick="window.location.href='registration.php'">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>