<?php 

require_once 'dbConfig.php';

if (isset($_GET['id'])) {

    $m_id = $_GET['id'];

    $sql = "DELETE FROM `add_monuments` WHERE `m_id`='$m_id'";

     $result = $db->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('location:viewMonuments.php');

    }else{

        echo "Error:" . $sql . "<br>";

    }

} 

?>