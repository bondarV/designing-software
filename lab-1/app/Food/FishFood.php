<?php
namespace Food;

class FishFood extends Food {
    public function __construct(int|float $weight) {
        parent::__construct("Fish Food", $weight);
    }

    public function getFoodType(): string {
        return "Fish Food";
    }
}