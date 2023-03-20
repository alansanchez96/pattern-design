<?php
namespace Src;

use Src\Builder\PcBuilder;

class Shop 
{
    private PcBuilder $builder;

    public function setBuilder(PcBuilder $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    public function getPc()
    {
        return $this->builder->getPc();
    }

    public function buildPc()
    {
        $this->builder->buildPc();
    }
}