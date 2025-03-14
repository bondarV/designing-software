<?php

namespace ConcreteObjects;

class Hero extends NPC
{
    protected array $goodDeeds = [];


    public function addGoodDeed(string $deed) : self
    {
        $this->goodDeeds[] = $deed;
        return $this;
    }

}