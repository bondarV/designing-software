<?php

namespace Animals\Fish;

use Animals\Animal;
use Animals\Interfaces\MainAbility\Swimming;
use Enclosures\BaseEnclosure;

class Fish extends Animal implements Swimming
{
    protected string $scaleType;

    public function __construct(
        string $name,
        int|float $age,
        string $gender,
        string $habitat,
        int|float $weight,
        string $species,
        string $scaleType,
        BaseEnclosure $enclosure
    ) {
        parent::__construct($name, $age, $habitat, $species, $gender, $weight, $enclosure);
        $this->scaleType = $scaleType;
    }

    public function swim(): void
    {
        echo "$this->name, the $this->species, is swimming gracefully through the water.<br>";
    }
}
