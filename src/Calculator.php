<?php

namespace Src;

use Src\Interface\IOperator;
use Src\Strategies\AdditionStrategy;

class Calculator
{
    protected $operation;

    public function __construct(IOperator $operation = null)
    {
        $this->operation = $operation ?? new AdditionStrategy;
    }

    public function execute($a, $b)
    {
        return $this->operation->getResult($a, $b);
    }

    public function setOperator(IOperator $operation)
    {
        $this->operation = $operation;
    }

    public function __call($method, $arguments)
    {
        $classname = 'Src\\Strategies\\' . ucfirst($method) . 'Strategy';
        list($a, $b) = $arguments;

        $this->setOperator(new $classname);
        return $this->execute($a, $b);
    }
}
