<?php 
require_once 'dbConfig.php';
// Get image data from database

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO `feedback`(`v_name`, `v_email`, `subject`, `msg`) VALUES ('$name','$email','$subject','$msg')";

    $result = $db->query($sql);

    if ($result == TRUE) {

      echo " Thank you for your feedback.";
      // echo $contact->send();

    }else{

      echo "Error:". $sql . "<br>". $db->error;

    } 

    $db->close(); 

  }

?>
 
<style>
 

input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #2487ce;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #f4511e;
}

.containerFeed {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
 

<div class="containerFeed">
  <form action=" " method="post">
    <label for="fname">Your Name</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label for="lname">Email</label>
    <input type="email" name="email" placeholder="Your email" required><br>

    <label for="country">Subject</label>
    <input type="text" name="subject" placeholder="subject" required>
    </select>

    <label for="subject">Message</label>
    <textarea name="message" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>
 