<?php

require '../helpers-functions/autoload.php';

use Hierarchies\Abstraction\Square;
use Hierarchies\Implementation\RasterGraphic;

function clientCode(Square $square): void{
    $square->draw();
}
$rasterGraphic = new RasterGraphic();
$square = new Square($rasterGraphic);

clientCode($square);