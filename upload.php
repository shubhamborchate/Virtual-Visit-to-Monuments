<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $name =  $_REQUEST['name'];
            $time =  $_REQUEST['time'];
            $price =  $_REQUEST['price'];
            $location =  $_REQUEST['location'];
            $fact =  $_REQUEST['fact'];
            $style =  $_REQUEST['style'];
            $map =  $_REQUEST['map'];
            $t360 =  $_REQUEST['360'];
            $details =  $_REQUEST['details'];
         
            // Insert image content into database 
            $insert = $db->query("INSERT into add_monuments (name , details ,image, time ,price ,created,location,fact,style,map,t360) VALUES ('$name','$details','$imgContent','$time','$price', NOW(),'$location','$fact','$style','$map','$t360')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>