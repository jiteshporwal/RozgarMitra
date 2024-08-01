<?php

require ('stripe-php-master/init.php');

$publishablekey = "pk_test_51P5qohSCVDdeN9uoiCa7rhiVaD6EUG3ixsWbTNIM7jzrwU921AH0p06Qb69kjML43oJxcrKp2eeFZLzHSuz9iV2S0041mATGeK";

$secretkey = "sk_test_51P5qohSCVDdeN9uoR8JlYOGGnwblTTInPvvd0RmbLieKNwXRRoigiXw3ySt8WyXuQk43U8VKyoSicLvvD3Iwp25Z00KmvvJjFG";

\Stripe\Stripe::setApiKey($secretkey);

?>