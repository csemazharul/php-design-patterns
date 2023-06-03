<?php

use Mazed\DesignPatterns\Factory\Class\MessageFactory;

require_once __DIR__ . '/../../vendor/autoload.php';
$emailMessage = MessageFactory::createMessage('email');
$emailMessage->send();  // Sending email message...

$smsMessage = MessageFactory::createMessage('sms');
$smsMessage->send();  // Sending SMS message...