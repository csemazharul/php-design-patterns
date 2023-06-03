<?php

namespace Mazed\DesignPatterns\Strategy\Class;

class CreditCardPayment implements PaymentMethod {
    public function processPayment(float $amount): void {
        echo "Processing credit card payment for amount $amount...\n";
        // Logic to process credit card payment
    }
}