<?php

require_once 'PaymentMethod.php';
require_once 'Paypal.php';
require_once 'cod.php';
require_once 'stripe.php';

use Payment_methods\Paypal;
use Payment_methods\Cod;
use Payment_methods\Stripe;

$paypal = new Paypal();
$cod = new Cod();
$stripe = new Stripe();

echo $paypal->payment() . "\n" ;
echo $cod->payment() . "\n";
echo $stripe->payment() . "\n";