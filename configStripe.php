<?php

require('stripe-php-master/init.php');
$publishableKey="pk_test_51LP5NeSE1idtPUJb05m6uVxNz0LlDQnevxSDkoYmIUnGWlFiKzmd9rD3euMtg6xu8uDN0zSJJqbjENYGesddjOjN00hAvUo9mY";
$secretKey="sk_test_51LP5NeSE1idtPUJbNClp9fDuSU6e46m8Be423G8hMYvRLHVDDTFK6joLBIdNTslzU8M0cG5OYtJardvaMSLiMxJH00pbTns9nt";

\Stripe\Stripe::setApiKey($secretKey);

?>