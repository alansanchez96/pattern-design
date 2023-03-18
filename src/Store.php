<?php

namespace Src;

use Src\Interface\PaymentProcessor;

class Store
{
    protected PaymentProcessor $api;

    public function __construct(PaymentProcessor $api)
    {
        $this->api = $api;
    }

    public function process()
    {
        $this->api->getClientData();
        $this->api->charge();
    }
}
