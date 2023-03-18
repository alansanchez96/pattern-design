<?php

namespace Src\Interface;

interface PaymentProcessor
{
    public function getClientData();

    public function charge();
}
