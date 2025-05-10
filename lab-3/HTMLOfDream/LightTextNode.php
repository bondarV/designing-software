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
    public function onTextRendered(): void
    {
        echo 'text posted: '.$this->text.PHP_EOL;
    }

    public function onInserted(string $parent): void
    {
        echo 'inserted text: '.$this->text.' inside element '.$parent.PHP_EOL;
    }
}