<?php

namespace Animals;
use Enclosures\BaseEnclosure;

abstract class Animal
{

    public function __construct(
        protected string        $name,
        protected int|float     $age,
        protected string        $habitat,
        protected string        $species,
        protected string        $gender,
        protected int|float     $weight,
        protected BaseEnclosure $enclosure,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int|float
    {
        return round($this->age, 2);
    }
}
