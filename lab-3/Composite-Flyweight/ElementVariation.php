<?php
class ElementVariation
{
    public function __construct(
        private string $tagName,
        private string $displayValue,
        private bool $isSelfClosing
    ) {}

    public function getTagName(): string
    {
        return $this->tagName;
    }

    public function isSelfClosing(): bool
    {
        return $this->isSelfClosing;
    }

    public function displayValue(): string
    {
        return $this->displayValue;
    }
}