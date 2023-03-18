<?php

namespace Src\Adapters;

use Src\Api\BancoSantanderApi;
use Src\Interface\PaymentProcessor;

class BankAdapter implements PaymentProcessor
{
    protected BancoSantanderApi $bankApi;

    public function __construct(BancoSantanderApi $bankApi)
    {
        $this->bankApi = $bankApi;
    }

    public function getClientData()
    {
        $this->bankApi->getClientInformation();
    }

    public function charge()
    {
        $this->bankApi->chargeClient();
    }
}
