<?php

namespace Food;

class Vegetables extends Food {
    public function __construct(int|float $weight) {
        parent::__construct("Vegetables", $weight);
    }

    public function getFoodType(): string {
        return "Vegetables";
    }
}