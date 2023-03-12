<?php 
require('configStripe.php');
?> 
<form action="submitStripe.php" method="post">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
data-key="<?php echo $publishableKey?>"
data-amount="500"
data-name="Programming with Vishal" 
data-description="Programming with Vishal Desc"
data-image="" 
data-currency="inr"
>
</script>

</form>