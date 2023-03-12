<?php 
    require_once 'dbConfig.php';
    // Get image data from database
    // $sql = "select m_id, count(*) AS duplicates from booking group by m_id order by duplicates desc";
    // $sql = "select SUM(total) from booking where m_id='".$mid."'";
    // $result = $db->query($sql);

    // if ($result->num_rows > 0) 
    // {
    // // output data of each row
    // while($row = $result->fetch_assoc()) 
    // {
    //     echo $row["duplicates"]. "<br>";
    // }
    // } 
    // else 
    // {
    // }
     
?>

<label for="cars">Choose a Monument:</label>
        <select name="navyOp" onchange="test(this);">
        <option value="AN01" selected="selected">AN01</option>
        <option value="AN02">AN02</option>
        <option value="AN03">AN03</option>
        </select>
        <br><br><br>
        <script>
            window.test = function(e) {
                console.log(e.value);
             let v=e.value;
             <script>localStorage.setItem('firstname', 'Smith');</script>
             <?php 
             $id=30;
                // $sql = "select m_id, count(*) AS duplicates from booking group by m_id order by duplicates desc";
                $sql = "select SUM(total) as tv from booking where m_id='".$id."'";
                $result = $db->query($sql);
            
                if ($result->num_rows > 0) 
                {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo $row["tv"]. "<br>";
                }
                } 
                else 
                {
                }
             ?>
            //  document.write(v);
            }
        </script>
