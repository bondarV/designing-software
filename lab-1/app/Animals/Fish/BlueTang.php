<?php

namespace Animals\Fish;

use Animals\Animal;
use Enclosures\BaseEnclosure;
use Animals\Interfaces\MainAbility\Swimming;

class BlueTang extends Animal implements Swimming
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
        string        $species = 'BlueTang'
    ) {
        parent::__construct($name, $age, $habitat, $species, $gender, $weight, $enclosure);
        $this->canSwimFast = $canSwimFast;
    }

    public function swim(): void
    {
        echo "$this->name the BlueTang is swimming in the coral reefs.<br>";
        if ($this->canSwimFast) {
            echo "$this->name swims gracefully and quickly!<br>";
        } else {
            echo "$this->name swims slowly.<br>";
        }
    }

    public function makeSound(): void
    {
        echo "$this->name the BlueTang makes a high-pitched sound.<br>";
    }
}
