<?php

namespace Mazed\DesignPatterns\Strategy\Class;

interface PaymentMethod {
    public function processPayment(float $amount): void;
}