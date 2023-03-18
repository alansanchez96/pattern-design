<?php

namespace Src\Invoker;

use Src\Commands\Switch\OnCommand;
use Src\Commands\Switch\OffCommand;

class SwitchInvoker
{
    protected OnCommand $onCommand;

    protected OffCommand $offCommand;

    public function __construct(OnCommand $onCommand, OffCommand $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }

    public function on()
    {
        $this->onCommand->execute();
    }

    public function off()
    {
        $this->offCommand->execute();
    }
}
