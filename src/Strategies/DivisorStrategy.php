<?php

namespace Src\Strategies;

use Src\Interface\IOperator;

class DivisorStrategy implements IOperator
{
    public function getResult($a, $b)
    {
        var_dump($a / $b);
    }
}
