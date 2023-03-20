<?php

require __DIR__ . '/public/app.php';

use Src\Shop;
use Src\Builder\GamerPcBuilder;
use Src\Builder\BudgetPcBuilder;

$shop = new Shop;

//$shop->setBuilder(new GamerPcBuilder);
$shop->setBuilder(new BudgetPcBuilder);
$shop->buildPc();

var_dump($shop->getPc());
