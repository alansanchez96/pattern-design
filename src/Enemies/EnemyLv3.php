<?php

namespace Src\Enemies;

use Src\Interface\IEnemy;

class EnemyLv3 implements IEnemy
{
    public function takeDamage()
    {
        return 6;
    }
}
