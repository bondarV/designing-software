<?php
class ElementVariation
{
    public function __construct(
        private array $state
    ) {}

    public function getTagName(): string
    {
        return $this->state[0];
    }

    public function isSelfClosing(): bool
    {
        return $this->state[2];
    }

    public function displayValue(): string
    {
        return $this->state[1];
    }
}