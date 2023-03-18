<?php

use Src\Store;
use Src\Api\PayPalApi;
use Src\Adapters\BankAdapter;
use Src\Api\BancoSantanderApi;
use Src\Adapters\PayPalAdapter;

require __DIR__ . '/public/app.php';

$bankAdapter = new BankAdapter(new BancoSantanderApi);
$paypalAdapter = new PayPalAdapter(new PayPalApi);

// Aqui puedes ir probando los adaptores que necesites
$store = new Store($paypalAdapter);

$store->process();