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
            $name =  $_POST['name'];
            $time =  $_POST['time'];
            $price =  $_POST['price'];
            $location =  $_POST['location'];
            $fact =  $_POST['fact'];
            $style =  $_POST['style'];
            $map =  $_POST['map'];
            $t360 =  $_POST['360'];
            $details =  $_POST['details'];
            $m_id = $_POST['m_id'];
         
            // Insert image content into database 
            //$s= "UPDATE `add_monuments` SET `price`='505' WHERE 'm_id'=$m_id";
            $sql1="UPDATE `add_monuments` SET `name`='$name',`details`='$details',`image`='$imgContent',`time`='$time',`price`='$price',`location`='$location',`fact`='$fact',`style`='$style',`map`='$map',`t360`='$t360' WHERE m_id='$m_id'";
            $insert = $db->query($sql1); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                header('location:viewMonuments.php');
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