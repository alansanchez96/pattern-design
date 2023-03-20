<?php

namespace Src\Builder;

use Src\Model\Pc;
use Src\Builder\PcBuilder;

class BudgetPcBuilder extends PcBuilder
{
    public function __construct()
    {
        $this->pc = new Pc;
    }

    public function buildPc()
    {
        $this->pc->setCpu('i3');
        $this->pc->setMother('Asrock');
        $this->pc->setMemory('8gb');
        $this->pc->setVideoCard(null);
        $this->pc->setDisk('240GB ssd');
    }
}
