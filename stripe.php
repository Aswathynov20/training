<?php

namespace Payment_methods;

class Stripe implements PaymentMethod {
    public function payment() {
        echo "Stripe";
    }
}

