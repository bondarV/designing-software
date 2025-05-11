<?php

use strategies\ImageLoadStrategy;


class Image extends LightElementNode
{
    private ImageLoadStrategy $strategy;
    private string $source;

    public function __construct(ImageLoadStrategy $strategy, string $source, ElementVariation $element, array $cssClasses = [])
    {
        parent::__construct($element, $cssClasses);
        $this->strategy = $strategy;
        $this->source = $source;
    }


    public function setStrategy(ImageLoadStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }


    public function display(): void
    {
        $this->strategy->loadImage($this->source);
    }

    public function setHref(string $source): void
    {
        $this->source = $source;
    }

}
