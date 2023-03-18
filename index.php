<?php

use Src\Calculator;
use Src\Strategies\AdditionStrategy;
use Src\Strategies\SubtractionStrategy;

require __DIR__ . '/public/app.php';

$addition = new AdditionStrategy();
$subtraction = new SubtractionStrategy();

$calculator = new Calculator();

$calculator->execute(5, 3);

echo '<hr>';

$calculator->addition(5, 3);

echo '<hr>';

$calculator->subtraction(5, 3);

echo '<hr>';

$calculator->multiplication(5, 3);

echo '<hr>';

$calculator->divisor(5, 5);
