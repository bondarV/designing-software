<?php

namespace Products\ConcreteProducts\SmartPhones;

use Products\Interfaces\Smartphone;



class BalaxySmartphone implements Smartphone
{
    public function getModel(): string
    {
        return "Balaxy S25 Ultra";
    }

    public function Longevity(): int
    {
        return 84;
    }

    public function operatingSystem(): string
    {
        return "Android 13";
    }
}
