<?php
namespace Animals\Mammals;

use Animals\Animal;
use Animals\Interfaces\Behaviour\Aggresion;
use Enclosures\BaseEnclosure;

class Mammal extends Animal implements Aggresion
{
    protected string $dietType;

    public function __construct(
        string $name,
        int|float $age,
        string $gender,
        string $habitat,
        int|float $weight,
        string $species,
        string $dietType,
        BaseEnclosure $enclosure
    ) {
        parent::__construct(
            name: $name,
            age: $age,
            habitat: $habitat,
            species: $species,
            gender: $gender,
            weight: $weight,
            enclosure: $enclosure
        );

        $this->dietType = $dietType;
    }

    public function grunt(): void
    {
        echo "$this->name the $this->species grunts loudly.\n";
    }
}
