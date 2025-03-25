<?php

namespace Director;

use Builders\CharacterBuilder;

class Director
{
    private CharacterBuilder $builder;

    public function setBuilder(CharacterBuilder $builder) : void
    {

        $this->builder = $builder;
    }

    public function provideBasicOrk() : void{
        $this->builder
            ->addFeature('small')
        ->addFeature('angry')
        ->addFeature('bad')
        ->setMotto('I am miserable!!!')
        ->setHealthPoints(10)
        ->setName('Vanya')
        ->setHeight(150)
        ->setRace('ork');
    }
}