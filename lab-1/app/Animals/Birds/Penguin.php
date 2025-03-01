<?php

namespace Animals\Birds;

use Animals\Interfaces\MainAbility\Swimming;
use Enclosures\BaseEnclosure;

class Penguin extends Bird implements Swimming
{
    public function __construct(string $name, int|float $age, string $gender, string $habitat, int|float $weight, string $species, string $birdType, BaseEnclosure $enclosure)
    {
        parent::__construct($name, $age, $gender, $habitat, $weight, $species, $birdType,$enclosure);
    }

    public function swim(): void
    {
        echo "$this->name, a $this->species, is swimming gracefully in the water.\n";
    }
}
