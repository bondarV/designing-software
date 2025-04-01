<?php
include '../helpers-functions/autoload.php';

use ConcreteClasses\Warrior;
use Decorators\ConcreteDecorators\Artefacts\BoneOfTruthDecorator;
use Decorators\ConcreteDecorators\Weapons\WandDecorator;


$hero = new Warrior();
//
//$decorator1 = new WandDecorator($hero);
//$decorator2 = new BoneOfTruthDecorator($decorator1);
$decoratedHero = new WandDecorator(new BoneOfTruthDecorator($hero));
echo'Full description:'.$decoratedHero->getDescription().PHP_EOL.'Strength:'.$decoratedHero->getStrength().PHP_EOL;