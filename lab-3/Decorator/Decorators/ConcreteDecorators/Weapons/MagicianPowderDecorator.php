<?php

namespace Decorators\ConcreteDecorators\Weapons;

class MagicianPowderDecorator extends WeaponDecorator
{
    public function getDescription(): string
    {
        return $this->hero->getStrength().',has a powder that makes blind the enemy for a time being';
    }
    public function getStrength(): float
    {
        return $this->hero->getStrength() + 90;
    }
}