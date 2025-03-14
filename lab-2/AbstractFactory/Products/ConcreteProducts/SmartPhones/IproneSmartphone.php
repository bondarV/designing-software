<?php

namespace AbstractFactory\Products\ConcreteProducts\SmartPhones;



namespace Products\ConcreteProducts\SmartPhones;


use Products\Interfaces\Smartphone;

class IproneSmartphone implements Smartphone
{
    public function getModel(): string
    {
        return "Iprone 15 Pro";
    }

    public function Longevity(): int
    {
        return 72; // час автономної роботи в годинах
    }

    public function operatingSystem(): string
    {
        return "iOS 17";
    }
}
