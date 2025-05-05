<?php


class LightTextNode extends LightNode{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getHTML(): string
    {
        return htmlspecialchars($this->text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}