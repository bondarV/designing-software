<?php
declare(strict_types=1);

namespace Animals\Birds;

use Animals\Interfaces\FurHair\Bold;
use Animals\Interfaces\MainAbility\Flying;
use Enclosures\BaseEnclosure;

class BlueJay extends Bird implements Flying, Bold
{
    public function __construct(
        string $name,
        int|float $age,
        string $gender,
        string $habitat,
        int|float $weight,
        string $birdType,
        BaseEnclosure $enclosure,
        string $species = 'BlueJay',
    ) {
        parent::__construct(name: $name, age: $age, gender: $gender, habitat: $habitat, weight: $weight, species: $species, birdType: $birdType,enclosure:$enclosure);
    }

    public function fly(): void
    {
        echo "$this->name, the $this->species, soars majestically through the sky.\n";
    }

}
