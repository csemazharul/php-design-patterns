<?php


namespace Mazed\DesignPatterns\Factory\Class;
class SMSMessage implements Message {
    public function send(): void {
        echo "Sending SMS message...\n";
        // Logic to send SMS message
    }
}