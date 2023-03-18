<?php

namespace Src\Strategies;

use Src\Interface\IOperator;

class AdditionStrategy implements IOperator
{
    public function getResult($a, $b)
    {
        var_dump($a + $b);
    }
}
