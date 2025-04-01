<?php

namespace Decorators\ConcreteDecorators\Clothes;

class CloakDecorator extends ClothingDecorator
{

    public function getDescription(): string
    {
        return $this->hero->getDescription().',posses an cloak of invisibility that gives power to vansih';
    }

    public function getStrength(): float
    {
        return $this->hero->getStrength() + 50;
    }
}