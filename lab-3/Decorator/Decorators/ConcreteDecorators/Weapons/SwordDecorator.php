<?php

namespace Decorators\ConcreteDecorators\Weapons;

class SwordDecorator extends WeaponDecorator
{
    public function getDescription(): string
    {
        return  $this->hero->getDescription().',has a sword with blazor on the peak';
    }
    public function getStrength(): float
    {
        return $this->hero->getStrength() + 100;
    }
}