<?php


class LightTextNode extends LightNode
{

    public function __construct(protected string $text)
    {

    }

    public function getHTML() : string
    {
        return $this->text;
    }

}