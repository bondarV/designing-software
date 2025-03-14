<?php

namespace Products\ConcreteProducts\Netbooks;

use Products\Interfaces\Netbook;

class KiaomiNetbook implements Netbook
{
    public function getHardDiskSize(): string
    {
        return "256GB SSD";
    }

    public function getSpecialFeatures(): array
    {
        return ["Fingerprint scanner", "Slim design", "Backlit keyboard"];
    }

    public function getCPUModel(): string
    {
        return "AMD Ryzen 5";
    }
}
