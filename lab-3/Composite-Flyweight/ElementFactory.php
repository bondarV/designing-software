<?php

class ElementFactory
{
    public function __construct(array $initialFlyweights ){
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new ElementVariation($state);
        }

    }
    private array $flyweights = [];

    private function getKey(array $state): string
    {
        ksort($state);
        return implode('_', $state);
    }

    public function getFlyweight(string $tagName, string $displayValue = 'block', bool $isSelfClosing = false): ElementVariation
    {
        $key = $this->getKey([$tagName, $displayValue, $isSelfClosing]);

        if (!isset($this->flyweights[$key]) || !($this->flyweights[$key] instanceof ElementVariation)) {
            $this->flyweights[$key] = new ElementVariation([$tagName, $displayValue, $isSelfClosing]);
        }

        return $this->flyweights[$key];
    }

    public function getElementVariations(): void
    {
        $count = count($this->flyweights);
        echo "\nFlyweightFactory: I have $count flyweights:\n";
        foreach ($this->flyweights as $key => $flyweight) {
            echo $key . "\n";
        }
    }
}