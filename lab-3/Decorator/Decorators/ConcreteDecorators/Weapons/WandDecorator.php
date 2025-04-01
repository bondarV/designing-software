<?php

namespace Decorators\ConcreteDecorators\Weapons;

class WandDecorator extends WeaponDecorator
{
    public function getDescription(): string
    {
        return $this->hero->getDescription().',has a wand that could cast a curse on you';
    }
    public function getStrength(): float
    {
        return $this->hero->getStrength() + 150;
    }
}