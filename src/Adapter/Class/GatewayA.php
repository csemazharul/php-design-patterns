<?php

namespace Mazed\DesignPatterns\Adapter\Class;

class GatewayA
{
    public function makePaymentA($amount)
    {
        return $amount;
    }
}
