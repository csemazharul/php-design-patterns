<?php

use Mazed\DesignPatterns\Strategy\Class\BankTransferPayment;
use Mazed\DesignPatterns\Strategy\Class\CreditCardPayment;
use Mazed\DesignPatterns\Strategy\Class\PaymentProcessor;

require_once __DIR__ . '/../../vendor/autoload.php';

$creditCardPayment = new CreditCardPayment();
$paymentProcessor = new PaymentProcessor($creditCardPayment);
$paymentProcessor->processPayment(100.50);  // Processing credit card payment for amount 100.50...

$bankTransferPayment = new BankTransferPayment();
$paymentProcessor = new PaymentProcessor($bankTransferPayment);
$paymentProcessor->processPayment(250.75);