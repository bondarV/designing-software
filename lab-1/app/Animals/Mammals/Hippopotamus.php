<?php

namespace Animals\Mammals;

use Animals\Interfaces\Behaviour\Affectionate;
use Enclosures\BaseEnclosure;

class Hippopotamus extends Mammal implements Affectionate
{
    public function __construct(
        string    $name,
        int|float $age,
        string    $gender,
        string    $habitat,
        int|float $weight,
        string    $species,
        string    $dietType,
        BaseEnclosure $enclosure
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


    public function nuzzle(): void
    {
        echo "$this->name the $this->species nuzzles its caretaker affectionately.\n";
    }

    public function pose(): void
    {
        echo "$this->name the $this->species stands tall and majestic in the water.\n";
    }
}
