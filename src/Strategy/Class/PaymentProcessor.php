<?php

namespace Mazed\DesignPatterns\Strategy\Class;

class PaymentProcessor {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): void {
        $this->paymentMethod->processPayment($amount);
    }
}