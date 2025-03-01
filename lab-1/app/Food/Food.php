<?php

namespace Food;
abstract class Food
{
    protected string $name;
    protected int|float $weight;

    public function __construct(string $name, int|float $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): int|float
    {
        return $this->weight;
    }

    abstract public function getFoodType(): string;
}