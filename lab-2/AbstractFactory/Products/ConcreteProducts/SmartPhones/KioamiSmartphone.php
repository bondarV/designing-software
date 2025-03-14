<?php

namespace Products\ConcreteProducts\SmartPhones;



use Products\Interfaces\Smartphone;

class KioamiSmartphone implements Smartphone
{
    public function getModel(): string
    {
        return "Kioami X100";
    }

    public function Longevity(): int
    {
        return 48;
    }

    public function operatingSystem(): string
    {
        return "KioamiOS 2.0";
    }
}

