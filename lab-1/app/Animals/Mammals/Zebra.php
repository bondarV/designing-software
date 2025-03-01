<?php

namespace Animals\Mammals;

use Animals\Interfaces\Behaviour\Affectionate;
use Enclosures\BaseEnclosure;

class Zebra extends Mammal implements Affectionate
{
    public function __construct(
        string        $name,
        int|float     $age,
        string        $gender,
        string        $habitat,
        int|float     $weight,
        string        $species,
        string        $dietType,
        BaseEnclosure $enclosure,
    )
    {
        parent::__construct(
            name: $name,
            age: $age,
            gender: $gender,
            habitat: $habitat,
            weight: $weight,
            species: $species,
            dietType: $dietType,
            enclosure: $enclosure
        );
    }

    public function pose(): void
    {
        echo "$this->name the zebra stands gracefully, showing off its stripes.\n";
    }

    public function nuzzle(): void
    {
        echo "$this->name the $this->species gently nuzzles its caretaker.\n";
    }

    public function grunt(): void
    {
        echo "$this->name the $this->species grunts loudly.\n";
    }
}
