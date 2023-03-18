<?php

namespace Src\Commands\Switch;

use Src\Lamp;
use Src\Interface\Command;

class OnCommand implements Command
{
    protected Lamp $lamp;

    public function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function execute(): void
    {
        $this->lamp->on();
    }
}
