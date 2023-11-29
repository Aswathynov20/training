<?php

namespace Payment_methods;

class Cod implements PaymentMethod {
    public function payment() {
        echo "Cod";
    }
}

