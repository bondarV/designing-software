<?php

namespace ConcreteClasses;

use Component\Hero;

class Palladin extends Hero
{
    public function getDescription() : string
    {
        return 'Noble '.explode('\\',__CLASS__)[1];
    }

    public function getStrength() : float
    {
        return 300;
    }

}