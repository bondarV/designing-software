<?php

namespace Products\ConcreteProducts\Netbooks;

use Products\Interfaces\Netbook;

class IproneNetbook implements Netbook
{
    public function getHardDiskSize(): string
    {
        return "1TB SSD";
    }

    public function getSpecialFeatures(): array
    {
        return ["Face ID", "Retina Display", "Touch Bar"];
    }

    public function getCPUModel(): string
    {
        return "Apple M1 Chip";
    }
}
