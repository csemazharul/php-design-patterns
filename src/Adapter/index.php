<?php

use Mazed\DesignPatterns\Adapter\Class\GatewayA;
use Mazed\DesignPatterns\Adapter\Class\GatewayAAdapter;
use Mazed\DesignPatterns\Adapter\Class\GatewayB;
use Mazed\DesignPatterns\Adapter\Class\GatewayBAdapter;
use Mazed\DesignPatterns\Adapter\Class\PaymentGateway;

require_once __DIR__ . '/../../vendor/autoload.php';

// Client code using the PaymentGateway interface

// Assuming you have instances of GatewayA and GatewayB
$gatewayA = new GatewayA();
$gatewayB = new GatewayB();

// Create adapters for the gateways
$adapterA = new GatewayAAdapter($gatewayA);
$adapterB = new GatewayBAdapter($gatewayB);

// Process payments using the unified interface
function processPaymentUsingGateway(PaymentGateway $gateway, $amount)
{
    return $gateway->processPayment($amount);
}

// Example usage:
echo processPaymentUsingGateway($adapterA, 100);
echo processPaymentUsingGateway($adapterB, 150);
