<?php

use Builders\HeroBuilder;

require './autoload.php';

$heroBuilder = new HeroBuilder();

var_dump($heroBuilder
    ->setMotto('Dude')
    ->setRace('magician')
    ->setHealthPoints(104.5)
    ->setHeight(190.5)
    ->setName('Grisha')
    ->addFeature('Throwing a potion')
    ->addFeature('Cover the enemy with curve')
    ->addGoodDeed('Save the dog')
    ->getHero());
