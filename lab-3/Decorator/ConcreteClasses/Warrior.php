<?php

namespace ConcreteClasses;

use Component\Hero;

class Warrior extends Hero
{

    public function getDescription() : string
    {
     return 'Suspicious '.explode('\\',__CLASS__)[1];
    }

    public function getStrength() : float
    {
        return 100;
    }
}