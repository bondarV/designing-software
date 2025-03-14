<?php

namespace Products\ConcreteProducts\Netbooks;

use Products\Interfaces\Netbook;

class BalaxyNetbook implements Netbook
{
    public function getHardDiskSize(): string
    {
        return "512GB SSD";
    }

    public function getSpecialFeatures(): array
    {
        return ["Touchscreen", "2-in-1 convertible", "Backlit keyboard"];
    }

    public function getCPUModel(): string
    {
        return "Intel Core i7";
    }
}
