<!-- Favicons -->
<link href="assets/img/favicon1.png" rel="icon" />
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


<?php
$driver = new mysqli_driver();
$driver -> report_mode = MYSQLI_REPORT_OFF;

if(isset($_SESSION['email']))
{
   header('Location: DashBoard.php');
   exit();
}
else
{
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      function validData($x)
      {
         $x = trim($x);
         $x = stripslashes($x);
         $x = htmlspecialchars($x);
         return $x;
      }
      
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "trip";
   
      $conn = @new mysqli($server, $user, $pass, $db);
   
      if($conn->connect_errno)
      {
         echo "Database connection failed!<BR>";
         echo "Reason: ", $conn->connect_error;
         exit();
      }
   
      $fname = $lname = $uname = $email = $pass = "";
      $unameE = $emailE = $passE = "";
      
      $name = validData($_POST["name"]);
      $email = validData($_POST["email"]);
      $place = validData($_POST["place"]);
      $pass = validData($_POST["pass"]);
      
       
      if(empty($email))
         $emailE = "Email Id field was empty!<BR>";
      if(empty($pass))
         $passE = "Password field was empty!<BR>";
       
      if(strlen($pass)<6)
         $passE .= "Password must be of 6 or more characters!<BR>";
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
         $emailE .= "Enter a valid Email ID!<BR>";
   
      if(!empty($emailE) || !empty($passE))
         $err = "Try again";
      else
      {
         $sql = "INSERT INTO `customer`(`cname`, `email`, `place`, `pass`)
            VALUES (?, ?, ?, ?)";
         
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("ssss", $name, $email, $place, $pass);
   
         if($stmt->execute())
         {
            $_SESSION['email'] = $email;
            header('Location: login.php');
            exit();
         }
         else
            $execE = "Something went wrong<BR>Please try again!";
      } 
          
      $conn->close();
   }
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
      <div class="form-container sign-up-container">
        
        
      </div>
      <div class="form-container sign-in-container">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>Create Account</h1>

          <span>Use your email for registration</span>
          <input type="text" placeholder="Name" name="name"/>
       
          <input type="email" placeholder="Email" name="email"/>
          <input type="text" placeholder="Birthplace" name="place"/>
       
       
          <input type="password" placeholder="Password" name="pass"/>
          <button>Sign Up</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            
          </div>
          <div class="overlay-panel overlay-right">
          <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn" onclick="window.location.href='login.php'">Sign In</button>
            <?php
   if(isset($err))
   {
      echo "<DIV class=\"red\">";
       
      if(!empty($emailE))
         echo $emailE;
      if(!empty($passE))
         echo $passE;
      echo "</DIV>";
   }
   elseif(isset($execE))
      echo $execE;
   else
   {
      echo "<P style='color: black;'><B>Direction: </B> Password must be of 6 or more characters.<BR>";
      echo "All fields must not be empty.<BR>";
       
   }
   ?>
          </div>
        </div>
      </div>
    </div>

    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
