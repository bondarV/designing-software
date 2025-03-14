<?php

namespace ConcreteObjects;

class Enemy extends NPC
{
    protected array $badDeeds = [];

    public function addBadDeed(string $deed) : self
    {
        $this->badDeeds[] = $deed;
        return $this;
    }
}