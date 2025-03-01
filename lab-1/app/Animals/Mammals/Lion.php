<?php

declare(strict_types=1);

namespace Animals\Mammals;

use Animals\Interfaces\Behaviour\Aggresion;
use Enclosures\BaseEnclosure;

class Lion extends Mammal implements Aggresion
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

    public function grunt(): void
    {
        echo "$this->name the lion lets out a deep grunt.\n";
    }

    public function roar(): void
    {
        echo "$this->name roars loudly, showing its dominance!\n";
    }

}