<?php

namespace Products\ConcreteProducts\Laptops;

use Products\Interfaces\Laptop;

class BalaxyLaptop implements Laptop
{
    public function getModel(): string
    {
        return "Balaxy X1000";
    }

    public function getScreenSize(): string
    {
        return "15.6 inches";
    }

    public function getOperatingSystem(): string
    {
        return "Windows 11";
    }
}
