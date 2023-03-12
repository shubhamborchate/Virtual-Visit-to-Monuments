<?php 
require('config.php');
require_once '../dbConfig.php';
// Get image data from database
//$sql = "SELECT * FROM add_monuments where id=30"; $result = $db->query($sql);

$sql="select * from add_monuments where m_id=30";

$result = $db->query($sql);
?> 
<form action="submit.php" method="post">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
data-key="<?php echo $publishableKey?>"
    <?php if($result->num_rows >    0) { ?>
    <?php while($row = $result->fetch_assoc()) { ?>
data-amount="<?php echo $row["price"]; ?>00"
    <?php } ?> 
    <?php }else{ ?>
    <p> class="status error">Image(s) not found...</p>
    <?php } ?>
data-name="Payment Gateway" 
data-description="Enter card details"
data-image="" 
data-currency="inr"
>
</script>

</form>