<?php

namespace ConcreteObjects;

abstract class NPC
{
    protected string $name;
    protected float $height;

    protected string $race;

    protected float $healthPoints;
    protected string $motto;

    protected array $features = [];

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }
    public function setRace(string $race): self
    {
        $this->race = $race;
        return $this;
    }
    public function setHealthPoints(float $healthPoints): self
    {
        $this->healthPoints = $healthPoints;
        return $this;
    }
    public function setMotto(string $motto): self
    {
        $this->motto = $motto;
        return $this;
    }
    public function addFeature(string $feature): self
    {
        $this->features[] = $feature;
        return $this;
    }
}