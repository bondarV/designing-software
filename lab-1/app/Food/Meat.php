<?php

namespace Food;

class Meat extends Food {
    public function __construct(int|float $weight) {
        parent::__construct("Meat", $weight);
    }

    public function getFoodType(): string {
        return "Meat";
    }
}
