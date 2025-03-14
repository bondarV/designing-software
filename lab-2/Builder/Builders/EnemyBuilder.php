<?php

namespace Builders;

use ConcreteObjects\Enemy;

class EnemyBuilder implements CharacterBuilder
{
    private Enemy $enemy;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->enemy = new Enemy();
    }

    public function setName(string $name) : self
    {
        $this->enemy->setName($name);
        return $this;
    }

    public function setHeight(float $height): self
    {
        $this->enemy->setHeight($height);
        return $this;
    }

    public function setRace(string $race): self
    {
        $this->enemy->setRace($race);
        return $this;
    }

    public function setHealthPoints(float $healthPoints): self
    {
        $this->enemy->setHealthPoints($healthPoints);
        return $this;
    }

    public function setMotto(string $motto): self
    {
        $this->enemy->setMotto($motto);
        return $this;
    }

    public function addFeature(string $feature): self
    {
        $this->enemy->addFeature($feature);
        return $this;
    }

    public function addBadDeed(string $deed) : self
    {
       $this->enemy->addBadDeed($deed);
       return $this;
    }
    public function getEnemy(): Enemy
    {
        return $this->enemy;
    }
}