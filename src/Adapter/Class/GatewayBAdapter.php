<?php

namespace Mazed\DesignPatterns\Adapter\Class;

class GatewayBAdapter implements PaymentGateway
{
    private $gatewayB;

    public function __construct(GatewayB $gatewayB)
    {
        $this->gatewayB = $gatewayB;
    }

    public function processPayment($amount)
    {
        // Adapt the GatewayB's method to the PaymentGateway interface
        return $this->gatewayB->payAmountB($amount);
    }
}
