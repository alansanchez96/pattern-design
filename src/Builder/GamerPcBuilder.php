<?php

namespace Src\Builder;

use Src\Model\Pc;
use Src\Builder\PcBuilder;

class GamerPcBuilder extends PcBuilder
{
    public function __construct()
    {
        $this->pc = new Pc;
    }

    public function buildPc()
    {
        $this->pc->setCpu('Ryzen 5600x');
        $this->pc->setMother('Asus x570');
        $this->pc->setMemory('16gb');
        $this->pc->setVideoCard('Rtx-3070');
        $this->pc->setDisk('2TB nvme');
    }
}
