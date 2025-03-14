<?php

use Viruses\Virus;

require './autoload.php';
$virus1 = new Virus(2, 10, "Virus1", "SpeciesA");

$virus2 = new Virus(2.5, 8, "Virus2", "SpeciesB");
$virus3 = new Virus(3, 9, "Virus3", "SpeciesC");

$virus1->addChild($virus2)->addChild($virus3);

$virus1Clone = clone $virus1;
var_dump($virus1);
var_dump($virus1Clone);
