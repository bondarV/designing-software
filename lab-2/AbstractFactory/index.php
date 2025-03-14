<?php

require './autoload.php';
use Factories\BalaxyFactory;
$balaxyFactory = new BalaxyFactory();
$app = new Application($balaxyFactory);
var_dump($app->getEbook()->getVersion());
var_dump($app->getEbook()->getImageFormats());
var_dump($app->getEbook()->getVersion());

