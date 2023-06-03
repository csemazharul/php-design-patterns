<?php

namespace Mazed\DesignPatterns\Factory\Class;

class EmailMessage implements Message {
    public function send(): void {
        echo "Sending email message...\n";
        // Logic to send email message
    }
}