<?php

class ElementFactory
{
    private array $flyweights = [];

    public function getFlyweight(string $tagName, string $displayValue = 'block', bool $isSelfClosing = false): ElementVariation
    {
        $key = md5($tagName . $displayValue . ($isSelfClosing ? '1' : '0'));

        if (!isset($this->flyweights[$key]) || !($this->flyweights[$key] instanceof ElementVariation)) {
            $this->flyweights[$key] = new ElementVariation($tagName, $displayValue, $isSelfClosing);
        }

        return $this->flyweights[$key];
    }

    public function getElementVariations(): array
    {
        return $this->flyweights;
    }
}