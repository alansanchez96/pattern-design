<?php

namespace Src\Enemies;

use Src\Interface\IEnemy;

class EnemyLv1 implements IEnemy
{
    public function takeDamage()
    {
        return 10;
    }
}
