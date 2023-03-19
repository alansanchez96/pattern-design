<?php

namespace Src\Decorators;

class ArmourDecorator extends EnemyDecorator
{
    public function takeDamage()
    {
        return $this->enemy->takeDamage() / 2;
    }
}
