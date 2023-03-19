<?php

require __DIR__ . '/public/app.php';

use Src\Enemies\EnemyLv1;
use Src\Enemies\EnemyLv2;
use Src\Enemies\EnemyLv3;
use Src\Decorators\ArmourDecorator;
use Src\Decorators\HelmetDecorator;

// $enemy = new EnemyLv1();
// $enemy = new EnemyLv2();
$enemy = new EnemyLv3();

$enemyWithHelmet = new HelmetDecorator($enemy);
$enemyWithHelmetAndArmour = new ArmourDecorator($enemyWithHelmet);

echo $enemyWithHelmetAndArmour->takeDamage();
