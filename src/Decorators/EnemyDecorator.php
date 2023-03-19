<?php

namespace Src\Decorators;

use Src\Interface\IEnemy;

abstract class EnemyDecorator implements IEnemy
{
    protected $enemy;

    public function __construct(IEnemy $enemy)
    {
        $this->enemy = $enemy;
    }

    public function takeDamage()
    {
        return $this->enemy->takeDamage();
    }
}
