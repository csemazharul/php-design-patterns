<?php

namespace Mazed\DesignPatterns\Adapter\Class;

interface PaymentGateway
{
    public function processPayment($amount);
}
