<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIIcEHoxoNiEQyY5L3IWpii5EbJXNQeaO14Wggd7DDDDMIsdHGFDMpg1OEyf1buhhiawEzWD9OZ10V8KiCWrQ200oCQgNelH'
  );
  $result = $stripe->products->retrieve(
    'prod_MP77iG5ybFAmT8',
    []
  );

  var_dump($result);