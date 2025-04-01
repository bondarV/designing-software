<?php
namespace Hierarchies\Abstraction;
use Hierarchies\Implementation\IGraphic;

abstract class Shape
{
    protected IGraphic $graphic;
    public function __construct(IGraphic $graphic)
    {
        $this->graphic = $graphic;

    }
    public function changeGraphic(IGraphic $graphic): void
    {
        $this->graphic = $graphic;
    }
    public function draw() : void
    {
        echo "Draw ".explode("\\", __CLASS__)[2].' as '.$this->graphic->getMeasurements().PHP_EOL;
    }


}