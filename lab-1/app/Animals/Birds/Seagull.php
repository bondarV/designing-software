<?php
declare(strict_types=1);

namespace Animals\Birds;

use Animals\Interfaces\Behaviour\Aggresion;
use Animals\Interfaces\MainAbility\Flying;
use Enclosures\BaseEnclosure;

class Seagull extends Bird implements Flying,Aggresion
{
    public function __construct(
        string $name,
        int|float $age,
        string $gender,
        string $habitat,
        int|float $weight,
        string $species,
        string $birdType,
        BaseEnclosure $enclosure
    ) {
        parent::__construct(name: $name, age: $age, gender: $gender, habitat: $habitat, weight: $weight, species: $species, birdType: $birdType, enclosure: $enclosure);
    }
    public function fly(): void
    {
        echo "$this->name, the $this->species, flies high in the sky.\n";
    }

    public function grunt(): void
    {
        echo "$this->name, the $this->species, is beginning ragging due to bad weather.\n";
    }
}
