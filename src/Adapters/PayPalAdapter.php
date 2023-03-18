<?php

namespace Src\Adapters;

use Src\Api\PayPalApi;
use Src\Interface\PaymentProcessor;

class PayPalAdapter implements PaymentProcessor
{
    protected PayPalApi $api;

    public function __construct(PayPalApi $api)
    {
        $this->api = $api;
    }

    public function getClientData()
    {
        $this->api->getClientInfo();
    }

    public function charge()
    {
        $this->api->clientPayment();
    }
}
