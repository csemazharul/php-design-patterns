<?php

namespace Mazed\DesignPatterns\Adapter\Class;

// GatewayAAdapter.php
class GatewayAAdapter implements PaymentGateway
{
    private $gatewayA;

    public function __construct(GatewayA $gatewayA)
    {
        $this->gatewayA = $gatewayA;
    }

    public function processPayment($amount)
    {
        // Adapt the GatewayA's method to the PaymentGateway interface
        return $this->gatewayA->makePaymentA($amount);
    }
}
