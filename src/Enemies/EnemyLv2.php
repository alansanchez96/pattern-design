<?php

namespace Src\Enemies;

use Src\Interface\IEnemy;

class EnemyLv2 implements IEnemy
{
    public function takeDamage()
    {
        return 8;
    }
}
