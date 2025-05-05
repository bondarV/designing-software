<?php

use strategies\FileSystemImageStrategy;
use strategies\NetworkImageStrategy;

function runStrategyExample()
{
    $image = new Image(new NetworkImageStrategy(), "https://cdn.pixabay.com/photo/2016/11/16/05/11/man-1828202_1280.jpg");

    $image->display().PHP_EOL;

    $image->setStrategy(new FileSystemImageStrategy());

    $image->setHref("img/chill.jpg");

    $image->display().PHP_EOL;
    echo $image->getHTML();
}
