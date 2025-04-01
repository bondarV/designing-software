<?php


namespace Decorators;
use Component\Hero;

abstract class InventoryDecorator extends Hero
{
    public function __construct(protected Hero $hero)
    {
    }

    abstract public function getDescription(): string;

    abstract public function getStrength(): float;

}