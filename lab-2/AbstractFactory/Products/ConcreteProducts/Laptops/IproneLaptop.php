<?php

namespace Products\ConcreteProducts\Laptops;

use Products\Interfaces\Laptop;

class IproneLaptop implements Laptop
{
    public function getModel(): string
    {
        return "Iprone Air 15";
    }

    public function getScreenSize(): string
    {
        return "13.3 inches";
    }

    public function getOperatingSystem(): string
    {
        return "macOS Ventura";
    }
}
