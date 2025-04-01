<?php

namespace Decorators\ConcreteDecorators\Artefacts;

class BoneOfTruthDecorator extends ArtefactFactory
{

    public function getDescription(): string
    {
       return $this->hero->getDescription().',has blessed bone form yanki\'s village';
    }
    public function getStrength(): float
    {
       return $this->hero->getStrength() + 2;
    }
}