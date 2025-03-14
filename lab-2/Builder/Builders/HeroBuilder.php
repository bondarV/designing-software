<?php

namespace Builders;

use ConcreteObjects\Hero;
use ConcreteObjects\NPC;

class HeroBuilder implements CharacterBuilder
{
    private Hero $hero;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->hero = new Hero();
    }

    public function setName(string $name): self
    {
        $this->hero->setName($name);
        return $this;
    }

    public function setHeight(float $height): self
    {
        $this->hero->setHeight($height);
        return $this;
    }

    public function setRace(string $race): self
    {
        $this->hero->setRace($race);
        return $this;
    }

    public function setHealthPoints(float $healthPoints): self
    {
        $this->hero->setHealthPoints($healthPoints);
        return $this;
    }

    public function setMotto(string $motto): self
    {
        $this->hero->setMotto($motto);
        return $this;
    }

    public function addFeature(string $feature): self
    {
        $this->hero->addFeature($feature);
        return $this;
    }

    public function addGoodDeed(string $deed): self
    {
        $this->hero->addGoodDeed($deed);
        return $this;
    }

    public function getHero(): Hero
    {
        $hero = $this->hero;
        $this->reset();
        return $hero;
    }
}
