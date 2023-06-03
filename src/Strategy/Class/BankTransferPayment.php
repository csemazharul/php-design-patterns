<?php

namespace Mazed\DesignPatterns\Strategy\Class;

class BankTransferPayment implements PaymentMethod {
    public function processPayment(float $amount): void {
        echo "Processing bank transfer payment for amount $amount...\n";
        // Logic to process bank transfer payment
    }
}