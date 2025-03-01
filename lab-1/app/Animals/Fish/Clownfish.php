<?php

namespace Animals\Fish;

use Animals\Animal;
use Enclosures\BaseEnclosure;
use Animals\Interfaces\MainAbility\Swimming;


class Clownfish extends Animal implements Swimming
{
    protected bool $canSwimFast;

    public function __construct(
        string        $name,
        int|float     $age,
        string        $habitat,
        string        $gender,
        int|float     $weight,
        BaseEnclosure $enclosure,
        bool          $canSwimFast = true,
        string        $species = 'Clownfish'
    )
    {
        parent::__construct($name, $age, $habitat, $species, $gender, $weight, $enclosure);
        $this->canSwimFast = $canSwimFast;
    }


    public function swim(): void
    {
        echo "$this->name the Clownfish is swimming in the coral reefs.<br>";
        if ($this->canSwimFast) {
            echo "$this->name swims very fast!<br>";
        } else {
            echo "$this->name swims slowly.<br>";
        }
    }

    public function makeSound(): void
    {
        echo "$this->name the Clownfish makes a bubbly sound.<br>";
    }
}
