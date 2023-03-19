<?php

namespace Src\Decorators;

use Src\Decorator\EnemyDecorator;

class HelmetDecorator extends EnemyDecorator
{
    public function takeDamage()
    {
        return $this->enemy->takeDamage() / 1.5;
    }
}
