<?php

namespace Builders;

use ConcreteObjects\NPC;

interface CharacterBuilder
{
    public function setName(string $name): self;

    public function setHeight(float $height): self;

    public function setRace(string $race): self;

    public function setHealthPoints(float $healthPoints): self;

    public function setMotto(string $motto): self;


    public function addFeature(string $feature): self;

}