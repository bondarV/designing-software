<?php

namespace ConcreteClasses;

use Component\Hero;

class Mage extends Hero
{
    public function getDescription() : string
    {
        return 'Brave'.explode('\\',__CLASS__)[1];
    }

    public function getStrength() : float
    {
        return 200;
    }
}