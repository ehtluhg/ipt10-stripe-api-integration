<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIIcEHoxoNiEQyY5L3IWpii5EbJXNQeaO14Wggd7DDDDMIsdHGFDMpg1OEyf1buhhiawEzWD9OZ10V8KiCWrQ200oCQgNelH'
  );
  $result = $stripe->products->delete(
    'prod_MP7Ax0SEHWI7lA',
    []
  );

  var_dump($result);