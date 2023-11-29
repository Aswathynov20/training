<?php

namespace Payment_methods;

class Paypal implements PaymentMethod {
    public function payment() {
        echo "Paypal";
    }
}
