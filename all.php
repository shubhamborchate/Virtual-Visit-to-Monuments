<?php
// Include the database configuration file
require_once 'dbConfig.php';
// Get image data from database
$sql = "SELECT * FROM add_monuments ORDER BY id DESC"; $result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Fact</th>
            <th>Time</th>
            <th>Style</th>
            <th>Image</th>
        </tr>
        <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td>
                <tr><?php echo $row["name"]; ?></tr>
                <tr><?php echo $row["location"]; ?></tr>
                <tr><?php echo $row["fact"]; ?></tr>
                <tr><?php echo $row["time"]; ?></tr>
                <tr><?php echo $row["style"]; ?></tr>
                <tr><img style="height: 8pc; width: 12pc;" src="data:image/jpg; charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></tr>
            </td>
        </tr>
    </table>
    <?php } ?> 


<?php }else{ ?>

<p class="status error">Image(s) not found...</p>

<?php } ?> 
</body>
</html>