<?php

namespace Mazed\DesignPatterns\Strategy\Class;

class PayPalPayment implements PaymentMethod {
    public function processPayment(float $amount): void {
        echo "Processing PayPal payment for amount $amount...\n";
        // Logic to process PayPal payment
    }
}