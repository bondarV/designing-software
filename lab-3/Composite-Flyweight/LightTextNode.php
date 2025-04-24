<?php


class LightTextNode extends LightNode
{

    public function __construct(protected string $text)
    {
    }

    public function getHTML() : string
    {
        return htmlspecialchars($this->text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

}