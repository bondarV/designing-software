<?php

namespace Animals\Birds;

use Animals\Animal;
use Enclosures\BaseEnclosure;

abstract class Bird extends Animal
{

    protected string $birdType;
    public function __construct(string $name, int|float $age, string $gender, string $habitat, int|float $weight, string $species, string $birdType, BaseEnclosure $enclosure )
    {
        parent::__construct(name: $name, age: $age, habitat: $habitat, species: $species, gender: $gender, weight: $weight,enclosure: $enclosure);
        $this->birdType = $birdType;
    }

    public function display(): void
    {
        echo "$this->name is a $this->species, aged $this->age years, and lives in $this->habitat. It's a $this->birdType bird.\n";
    }
}