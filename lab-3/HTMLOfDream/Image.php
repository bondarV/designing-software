<?php

use strategies\ImageLoadStrategy;


class Image extends LightNode
{
    private ImageLoadStrategy $strategy;
    private string $source;
    private array $cssClasses = [];

    public function __construct(ImageLoadStrategy $strategy, string $source)
    {
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


    public function getHTML(): string
    {
        $tagName = 'img';


        $classAttribute = !empty($this->cssClasses) ? ' class="' . implode(' ', $this->cssClasses) . '"' : '';


        return "<$tagName$classAttribute src=\"$this->source\" />";
    }


    public function setHref(string $source): void
    {
        $this->source = $source;
    }


    public function addClass(string $class): void
    {
        $this->cssClasses[] = $class;
    }
}
