<?php

namespace Mazed\DesignPatterns\Factory\Class;
use InvalidArgumentException;

class MessageFactory {
    public static function createMessage(string $type): Message {
        if ($type == 'email') {
            return new EmailMessage();
        } else if ($type == 'sms') {
            return new SMSMessage();
        } else {
            throw new InvalidArgumentException("Invalid message type specified");
        }
    }
}