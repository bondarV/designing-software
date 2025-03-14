<?php
namespace Viruses;
class Virus
{
    public function __construct(protected float $weight,
                                protected int $age,
                                protected string $name,
                                protected string $type,
                                protected array $children = [])
    {
    }
    public function __clone(): void
    {
        $this->children = array_map(function ($child) {
            return clone $child;
        },$this->children);
    }

    public function addChild(Virus $child) : self
    {
        if ($this !== $child) {
            $this->children[] = $child;
        }
        return $this;
    }
}