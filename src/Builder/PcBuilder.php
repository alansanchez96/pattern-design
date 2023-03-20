<?php

namespace Src\Builder;

use Src\Model\Pc;

abstract class PcBuilder
{
    protected Pc $pc;

    public function getPc()
    {
        return $this->pc;
    }

    abstract function buildPc();
}
