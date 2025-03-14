<?php

namespace Products\ConcreteProducts\Laptops;

use Products\Interfaces\Laptop;

class KioamiLaptop implements Laptop
{
    public function getModel(): string
    {
        return "Kioami MiBook Pro";
    }

    public function getScreenSize(): string
    {
        return "14.0 inches";
    }

    public function getOperatingSystem(): string
    {
        return "Windows 10";
    }
}
