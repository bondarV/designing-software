<?php

use observers\CollectDataListener;

$dataCollector = new CollectDataListener();

$button = new LightElementNode(new ElementVariation('button'));
$button->add(new LightTextNode('Click me!'));
$button->attach($dataCollector, 'click');

echo $button->getHTML();
$button->notify();




